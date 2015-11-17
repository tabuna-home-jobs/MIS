<?php namespace App\Console\Commands;

use App\Console\Commands\AppointmentsThread;
use App\Models\Appointments as Appoint;
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

        DB::connection()->disableQueryLog();
		if (Storage::exists('import.xml')) {

			$xml = simplexml_load_string(Storage::get('import.xml'));
            DB::table('entry')->truncate();
            DB::table('timetable')->truncate();

            $date = date("Y-m-d G:i:s");

            foreach ($xml->Record as $value) {


                $id = DB::table('timetable')->insertGetId([
                    'subdivision' => (string) $value->PODR,
                    'specialization' => (string) $value->SPEC,
                    'name'=> $value->SOTR,
                    'cabinet'=> $value->KAB,
                    'created_at' => $date,
                    'updated_at' => $date,
                ]);


                $entry = array();
                foreach($value->ZAPIS->T as $zapis)
                {
                    $entry[] = [
                        'beginning' => (int) $zapis->attributes()->S,
                        'end' => (int) $zapis->attributes()->PO,
                        '1c_busy' => (int) $zapis->attributes()->BUSY,
                        'timetable_id' => $id,
                        'created_at' => $date,
                        'updated_at' => $date,
                    ];

                }

                DB::table('entry')->insert($entry);
            }

			Storage::delete('import.xml');
            $this->info('Команда выгрузки xml файла расписания отработала' . date('h-i-s'));

        }
        else
        {
            $this->info('xml файл не существует');
        }


		$Apportointments = Appoint::all();
		$Views = view('XML.appointments', [
				'Record' => $Apportointments
		])->render();
		Storage::put('export.xml', $Views);



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
