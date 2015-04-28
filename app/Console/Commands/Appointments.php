<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
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
        if (Storage::exists('MiD.xml')) {

            //$xml = simplexml_load_string(Storage::get('MiD.xml'));
            //$xml = json_decode(json_encode($xml), TRUE);
            //dd($xml);
            Storage::delete('MiD.xml');
            $this->info('Команда выгрузки xml файла расписания отработала');
        }
        else
        $this->info('xml файл не существует');
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
