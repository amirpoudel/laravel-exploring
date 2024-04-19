<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;


class AttendanceController extends Controller
{
    // Get all attendance records
    public function index(Request $request){
        $attendances = Attendance::all(); // Retrieve all attendance records
        return response()->json([
            'status' => 'success',
            'message' => 'Attendance fetched successfully',
            'data' => $attendances // Return all attendance records
        ]);
    }

    // Store a new attendance record
    public function store(Request $request){
        // Validate incoming data
        $request->validate([
            'rfid_card_number' => 'required|string',
            'time' => 'required|date_format:H:i:s',
            'date' => 'required|date_format:Y-m-d'
        ]);

        // Create a new attendance record
        $attendance = Attendance::create([
            'rfid_card_number'=> $request->rfid_card_number,
            'time'=> $request->time,
            'date'=> $request->date
        ]);

        return response()->json([
            'status' => 'success',
            'statusCode'=> 201,
            'message' => 'Attendance stored successfully',
            'data' => $attendance // Return the created attendance record
        ]);
    }
}
