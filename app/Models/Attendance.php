<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['rfid_card_number', 'time', 'date'];

    protected $casts = [
        'time' => 'datetime', // Ensure 'time' is treated as a datetime
        'date' => 'date', // Ensure 'date' is treated as a date
    ];


    
}
