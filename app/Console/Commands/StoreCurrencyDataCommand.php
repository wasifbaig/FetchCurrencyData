<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\GetCurrencyDataController;

class StoreCurrencyDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'StoreCurrencyData';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'StoreCurrency data from currencylayer.com CLI command';

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
    public function handle()
    {
        $GetCurrencyDataController = new GetCurrencyDataController();
        echo $GetCurrencyDataController->storeData();

    }
}
