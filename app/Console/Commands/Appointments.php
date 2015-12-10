<?php namespace App\Console\Commands;

use App\Console\Commands\AppointmentsThread;
use App\Models\Appointments as Appoint;
use Carbon\Carbon;
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
		$files = collect(Storage::files(''));

		$filtered = $files->filter(function ($item) {
			return str_is('MiD_*-OUT.xml', $item);
		});



		DB::connection()->disableQueryLog();

		foreach ($filtered as $file1COUT) {


			if (Storage::exists($file1COUT)) {

				$xml = simplexml_load_string(Storage::get($file1COUT));

				DB::table('entry')->truncate();

				$date = date("Y-m-d G:i:s");

				$doctor  = [];

				foreach ($xml->Record as $value) {

					$doctor[]  = [
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
								'timetable_id' => (string) $value->attributes()->ID,
								'created_at' => $date,
								'updated_at' => $date,
						];
					}

					DB::table('entry')->insert($entry);


				}


				/*
				 * Начало подготовки для 1 запроса
				 */

				/*
				$sql = '';
				foreach ($entry as $key => $value) {
					if ($key == 0) {
						$sql .= '
						INSERT INTO entry("beginning", "end","1c_busy","timetable_id", "created_at", "updated_at")
						VALUES(?, ?, ?, ?, ?, ?)';

						if (isset($entry[$key + 1])) {
							$sql .= ",";
						}
					}
					else {
						$sql .= '(?, ?, ?, ?, ?, ?),';
					}
				}

				$sql = substr($sql, 0, -1);
				$rs = DB::getPdo()->prepare($sql);

				foreach ($entry as $key => $value) {
					$rs->bindParam($key + 1, $value['beginning']);
					$rs->bindParam($key + 2, $value['end']);
					$rs->bindParam($key + 3, $value['1c_busy']);
					$rs->bindParam($key + 4, $value['timetable_id']);
					$rs->bindParam($key + 5, $value['created_at']);
					$rs->bindParam($key + 6, $value['updated_at']);
				}


				$rs->execute();
				*/



				/*
				$rs = DB::getPdo()->prepare('
						INSERT INTO entry("beginning", "end","1c_busy","timetable_id", "created_at", "updated_at")
						VALUES(?, ?, ?, ?, ?, ?)'
				);

				foreach ($entry as $key => $value) {
					$rs->bindParam(1, $value['beginning']);
					$rs->bindParam(2, $value['end']);
					$rs->bindParam(3, $value['1c_busy']);
					$rs->bindParam(4, $value['timetable_id']);
					$rs->bindParam(5, $value['created_at']);
					$rs->bindParam(6, $value['updated_at']);
					$rs->execute();
				}


				dd('Выполнен');

				 */


				//	DB::getPdo()->prepare($entry)->insert();

				DB::table('timetable')->truncate();
				DB::table('timetable')->insert($doctor);

				Storage::delete($file1COUT);
				$this->info('Команда выгрузки xml файла расписания отработала ' . date('h-i-s'));

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
