<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\GetCurrencyDataController;
Use OceanApplications\currencylayer;

class CurrencyDataTest extends TestCase
{
    /**
     * Functionality test
     *
     * @return void
     */
    public function testStoreCurrencyData()
    {
        $response = $this->get('/storecurrencydata');
        $response
            ->assertStatus(200)
            ->assertSee('Success');
    }



    /**
     * Currencylayer Api test
     *
     * @return void
     */
    public function testCurrencylayerApi()
    {
        $currencylayer = new currencylayer\client(env('CURRENCY_API_KEY'));

        $response = $currencylayer
            ->source('USD')
            ->currencies('EUR, CHF')
            ->live();


        $this->assertArrayHasKey('quotes', $response);
    }


    /**
     * Currencylayer Api test
     *
     * @return void
     */
    public function testCurrencylayerApi1()
    {
        $currencylayer = new currencylayer\client(env('CURRENCY_API_KEY'));

        $response = $currencylayer
            ->source('USD')
            ->currencies('EUR, CHF')
            ->live();


        $this->assertEquals(true, $response['success']);
    }


}
