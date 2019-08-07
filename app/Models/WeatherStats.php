<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeatherStats extends Model
{

    protected $dates = [
        'last_update',
        'created_at',
        'updated_at',
    ];

    public function city(){

        return $this->belongsTo(City::class);



    }
}
