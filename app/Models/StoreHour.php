<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoreHour extends Model
{
    /**table */
    protected $table = "store_hours";

    /**fillable */
    protected $fillable = [
        'store_id',
        'day_of_week',
        'open_time',
        'close_time',
    ];
}
