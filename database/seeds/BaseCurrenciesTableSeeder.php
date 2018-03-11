<?php

use Illuminate\Database\Seeder;
use App\Models\BaseCurrencies;

class BaseCurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        BaseCurrencies::create(['currency_name'=>'USD']);


    }
}
