<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\schedule;
use App\Models\time;


class scheduleController extends Controller
{
    public function index()
    {
        $schedule = schedule::all();
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
        $time_header = ['08:00 - 10:00', '10:00 - 12:00', '12:00 - 14:00', '14:00 - 16:00', '16:00 - 18:00'];
        $times = time::all();
        return view('manageUserManagement.schedule_screen', ['schedule' => $schedule, 'days' => $days, 'time_header' => $time_header, 'times' => $times]);
    }

    public function create(Request $request){
        // dd('test');
        $time = time::where('id', $request->time_id)->first();

        $schedule = new schedule();
        $schedule->name = $request->name;
        $schedule->student_id = $request->student_id;
        $schedule->day = $request->day;
        $schedule->time = $time['time'];
        $schedule->time_id = $request->time_id;
        $schedule->save();
        return redirect('/schedule')->with('success', 'New Data Insert');
    }
    public function indexAdmin()
    {
        $schedules = schedule::all();
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
        $time_header = ['08:00 - 10:00', '10:00 - 12:00', '12:00 - 14:00', '14:00 - 16:00', '16:00 - 18:00'];
        $times = time::all();
        return view('manageUserManagement.scheduleAdmin_screen', ['schedules' => $schedules, 'days' => $days, 'time_header' => $time_header, 'times' => $times]);
    }
    public function createAdmin(Request $request){
        // dd($request->all());
        // schedule::create($request->all());
        $time = time::where('id', $request->time_id)->first();

        $schedule = new schedule();
        $schedule->name = $request->name;
        $schedule->student_id = $request->student_id;
        $schedule->day = $request->day;
        $schedule->time = $time['time'];
        $schedule->time_id = $request->time_id;
        $schedule->save();

        return redirect('/scheduleadmin')->with('success', 'New Data Insert');
    }
    public function edit($id){
        // dd('asdasd');
        $schedules = schedule::where('id', $id)->first();
        return view('manageUserManagement.editSchedule_screen', ['schedules'=> $schedules]);
    }
    public function update(Request $request, $id){
        // dd('asdasdasdasd');
        $schedules = schedule::where('id', $id)->first();
        $schedules -> update($request->all());
        return redirect('/scheduleadmin')->with('success', 'New Data Update');   
    }
    public function delete(Request $request, $id){
        $schedules = schedule::where('id', $id)->first();
        $schedules -> delete($schedules);
        return redirect('/scheduleadmin')->with('success', 'Data Delete');
    }

}
