<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\AttendanceController;


Route::apiResource('attendance', AttendanceController::class);



