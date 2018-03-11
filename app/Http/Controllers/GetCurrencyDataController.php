<?php


namespace App\Http\Controllers;
Use OceanApplications\currencylayer;
use  App\Models\BaseCurrencies;
use  App\Models\ConversionCurrencies;


class GetCurrencyDataController
{


    protected $currencylayer;
    protected $baseCurrenciesModel;


    public function __construct()
    {

        /**
         * Instantiate a currencylayer client instance.
         */
        $this->currencylayer = new currencylayer\client(env('CURRENCY_API_KEY'));


        /**
         * Instantiate BaseCurrencies object
         */
        $this->baseCurrenciesModel = new BaseCurrencies();
;
    }

    /**
     * store the currency data
     *
     * @return response
     */
    public function storeData()
    {

        $baseCurrency = $this->baseCurrenciesModel->where('currency_name', 'USD')->first();

        if( $baseCurrency != null)
        {

            // In free account, we can only use USD as base currency
            $result = $this->currencylayer
                ->source('USD')
                ->currencies('EUR, CHF')
                ->live();

            if( $result != null && $result['success'] == true )
            {

                foreach ($result['quotes'] as $key=>$rate)
                {

                    $data = ['base_currency_id'=>$baseCurrency->id, 'currency_name'=>str_replace('USD','',$key), 'rates'=>$rate];
                    ConversionCurrencies::create($data);
                }

                return response('Success : Data has stored.');

            }
            else
            {
                return response('Fail');
            }

        }
        else{

            return response('Fail');
        }




    }


}