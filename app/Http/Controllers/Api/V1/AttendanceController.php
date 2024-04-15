<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;


class AttendanceController extends Controller
{
    //get attendance

    public function index(Request $request){
        return response()->json([
            'status' => 'success',
            'message' => 'Attendance fetched successfully',
            'data' => []
        ]);
    }

    public function store(Request $request){
  
        
        return response()->json([
            ' status' => 'success',
            'statusCode'=> 201,
            'message' => 'Attendance stored successfully',
            'data' => $request->all()
        ]);
    }


}
