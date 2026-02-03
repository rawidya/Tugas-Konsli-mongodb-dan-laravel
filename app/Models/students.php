<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class students extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'students';

    protected $fillable = [
        'absen',
        'name',
        'class_id',
        'gender',
        'birthdate',
        'address',
        'nis',
    ];
}
