<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use SoftDeletes;

    protected $table = 'store';

    protected $fillable = [
        'name',
        'address',
        'is_open',
    ];

    
}
