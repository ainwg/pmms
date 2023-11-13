<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\attendance;
use App\Models\staff;

class attendanceController extends Controller
{
    public function create(Request $request){
        $attendance = new attendance();
        $attendance->name = $request->name;
        $attendance->student_id = $request->student_id;
        $uploadedFile = $request->file('image');
        $imageData = file_get_contents($uploadedFile->getRealPath());
        $attendance->image = $imageData;
        $attendance->save();
        return redirect('/usermanagement')->with('success', 'New Data Insert');
    }

    public function index(Request $request, $id){
        // dd($request->student_id);
        $staff_detail = attendance::where('student_id', $id)->get();
        return view('manageUserManagement.attendance_screen', ['attendance'=> $staff_detail]);
    }
    public function add(){
        
        return view('manageUserManagement.addAttendance_screen');   
    }
}
