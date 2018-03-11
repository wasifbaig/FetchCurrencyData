<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConversionCurrencies extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'conversion_currencies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['base_currency_id','currency_name','rates'];

}
