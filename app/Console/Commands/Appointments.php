<?php namespace App\Console\Commands;

use App\Console\Commands\AppointmentsThread;
use App\Models\Appointments as Appoint;
use Carbon\Carbon;
use DB;
use Illuminate\Console\Command;
use Storage;

class Appointments extends Command
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

        $files = collect(Storage::files(''));

        $filtered = $files->filter(function ($item) {
            return str_is('MiD_*-OUT.xml', $item);
        });


        if ($filtered->count() > 4) {
            foreach ($filtered as $file1COUT) {
                Storage::delete($file1COUT);
            }
            $filtered = [];
        }


        DB::connection()->disableQueryLog();

        foreach ($filtered as $file1COUT) {


            if (Storage::exists($file1COUT)) {

                $xml = simplexml_load_string(Storage::get($file1COUT));
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


                Storage::delete($file1COUT);
                $this->info('Команда выгрузки xml файла расписания отработала');

            } else {
                $this->info('xml файл не существует');
            }


            $Apportointments = Appoint::where('updated_at', '>', Carbon::now()->subWeeks(1))->get();
            $Views = view('XML.appointments', [
                'Record' => $Apportointments
            ])->render();
            Storage::put(time() . '-export.xml', $Views);

        }


    }



    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            //['example', InputArgument::REQUIRED, 'An example argument.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            //['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }

}
