<?php namespace App\Console\Commands;

use App\Console\Commands\AppointmentsThread;
use App\Models\Appointments as Appoint;
use DB;
use Illuminate\Console\Command;
use Storage;

class AppointmentsLock extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'xml:Appointments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Выгрузка xml файла для записи на приём.';

    protected $Timetable;
    protected $Entry;


    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        exec("ps ax | grep php | grep 'artisan'", $out, $error);
        //процес запущен если возвратиться true
        if ($error == 0) {
            $countExec = 0;
            foreach ($out as $value) {
                if (strpos($value, 'php artisan xml:Appointments') !== false) {
                    $countExec++;
                }
                if ($countExec > 1) {
                    $this->info('Служба уже запущена');
                    die();
                }
            }
        }
        $this->appointment();
    }


    protected function appointment()
    {
        //Если нет блокировки со стороны МиДа
        if (!Storage::exists('flag_MID.lock')) {
            Storage::put('flag_OKTAVIAN.lock', 'flag_OKTAVIAN.lock');
            //1.2. Октавиан читает от нас файл с обновленным расписанием - загружает его в свою БД и на сайт
            $this->readFile();

            //1.3. Октавиан читает от нас файл ответов - что мы загрузили себе в 1С - эти ID уже не надо повторно выгружать
            $this->answers();

            //1.1. Октавиан проверяет флаг - если мы не выгружаем, то флага нет, значит он вешает свой флаг, что он читает.
            $this->export();

            Storage::delete('flag_OKTAVIAN.lock');
        }
    }

    /**
     * Читаю файл айтибора
     */
    protected function readFile()
    {
        if (Storage::exists('plan.xml')) {
            $xml = simplexml_load_string(Storage::get('plan.xml'));
            $date = date("Y-m-d G:i:s");
            $doctor = [];

            foreach ($xml->Record as $value) {
                $doctor[] = [
                    'id' => $value->attributes()->ID,
                    'subdivision' => (string)$value->PODR,
                    'specialization' => (string)$value->SPEC,
                    'name' => $value->SOTR,
                    'created_at' => $date,
                    'updated_at' => $date,
                ];

                $entry = [];
                foreach ($value->ZAPIS->T as $zapis) {
                    $entry[] = [
                        'beginning' => (int)$zapis->attributes()->S,
                        'end' => (int)$zapis->attributes()->PO,
                        '1c_busy' => (int)$zapis->attributes()->BUSY,
                        'timetable_id' => (string)$value->attributes()->ID,
                        'upload' => true,
                        'subdivision' => (string)$value->PODR,
                    ];
                }

                DB::table('entry')->insert($entry);
            }

            DB::table('timetable')->truncate();
            DB::table('timetable')->insert($doctor);
            DB::table('entry')->where('upload', 'false')->delete();
            DB::table('entry')->where('upload', true)->update([
                'upload' => false
            ]);
        }
    }

    /**
     * Октавиан читает от нас файл ответов - что мы загрузили себе в 1С - эти ID уже не надо повторно выгружать
     */
    protected function answers()
    {
        if (Storage::exists('otvet.xml')) {
            $xml = simplexml_load_string(Storage::get('otvet.xml'));
            foreach ($xml->id as $key => $id) {
                $id = (int)$id;
                DB::table('appointments')->where('id', $id)->update([
                    'export' => true
                ]);
            }
        }
    }

    /**
     * Кто зарегался на сайте
     */
    protected function export()
    {
        $Apportointments = Appoint::where('export', false)
            ->get();

        if ($Apportointments->count() != 0) {
            $Views = view('XML.appointments', [
                'Record' => $Apportointments
            ])->render();

            Storage::put('new_clients.xml', $Views);
        }
    }
}
