<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversionCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversion_currencies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('base_currency_id')->unsigned();
            $table->string('currency_name');
            $table->decimal('rates',8,6);
            $table->timestamps();
            $table->foreign('base_currency_id')->references('id')->on('base_currencies');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conversion_currencies');
    }
}
