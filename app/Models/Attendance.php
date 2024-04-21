<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    private $table = "attendances";
    private $primaryKey = "rfid_card_number";
    private $fillable = ['rfid_card_number', 'time', 'date'];
    



    

    
}
