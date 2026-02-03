<?php

namespace App\Models;

// Perbaiki baris di bawah ini:
use MongoDB\Laravel\Eloquent\Model; 

class Car extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'Car';
}