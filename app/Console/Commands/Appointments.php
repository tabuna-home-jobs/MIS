<?php namespace App\Console\Commands;

use App\Console\Commands\AppointmentsThread;
use App\Models\Entry;
use App\Models\Timetable;
use DB;
use Illuminate\Console\Command;
use Storage;

class Appointments extends Command {

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
	public function __construct(Timetable $timetable, Entry $entry )
	{
        $this->Timetable = $timetable;
        $this->Entry = $entry;
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
        //ОТключаем лог
        DB::connection()->disableQueryLog();
        if (Storage::exists('MiD.xml')) {

            $xml = simplexml_load_string(Storage::get('MiD.xml'));
            DB::table('entry')->truncate();
            DB::table('timetable')->truncate();

            foreach ($xml->Record as $value) {

                $TimeTable = new Timetable([
                    'subdivision' => (string) $value->PODR,
                    'specialization' => (string) $value->SPEC,
                    'name'=> $value->SOTR,
                    'cabinet'=> $value->KAB,
                ]);

                $TimeTable->save();

                $entry = array();
                foreach($value->ZAPIS->T as $zapis)
                {
                    $entry[] = new Entry([
                        'beginning' => (int) $zapis->attributes()->S,
                        'end' => (int) $zapis->attributes()->PO,
                        '1c_busy' => (int) $zapis->attributes()->BUSY,
                    ]);

                }

                $TimeTable->entry()->saveMany($entry);
                $this->info('Запись полностью добавлена' . date('h-i-s'));
            }


            Storage::delete('MiD.xml');
            $this->info('Команда выгрузки xml файла расписания отработала' . date('h-i-s'));

        }
        else
        {
            $this->info('xml файл не существует');
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
