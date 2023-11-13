<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;


class staffController extends Controller
{
    public function index(){
        // dd('controllerstaff');
        $data_staffs = staff::all();
        // dd($data_staff);
        return view('manageUserManagement.staffList_screen', ['data_staffs'=> $data_staffs]);
        // return view('manageUserManagement.staffList_screen')->with('date_staff', $data_staffs);
        // return view('manageUserManagement.staffList_screen')->compact('data_staffs');
    }
    public function indexAdmin(){
        // dd('controllerstaff');
        $data_staffs = staff::all();
        // dd($data_staff);
        return view('manageUserManagement.staffListAdmin_screen', ['data_staffs'=> $data_staffs]);
        // return view('manageUserManagement.staffList_screen')->with('date_staff', $data_staffs);
        // return view('manageUserManagement.staffList_screen')->compact('data_staffs');
    }

    public function staffDetail($id){

        $staff_detail = staff::where('id', $id)->first();
        // dd($staff_detail);
        return view('manageUserManagement.staffDetails_screen', ['staff_detail'=> $staff_detail]);
        // dd($stafF_detail);
        // dd('controllerstaff');
        // $data_staffs = staff::all();
        // dd($data_staff);
        // return view('manageUserManagement.staffList_screen', ['data_staffs'=> $data_staffs]);
        // return view('manageUserManagement.staffList_screen')->with('date_staff', $data_staffs);
        // return view('manageUserManagement.staffList_screen')->compact('data_staffs');
    }
    public function staffDetailAdmin($id){

        $staff_detail = staff::where('id', $id)->first();
        return view('manageUserManagement.staffDetailsAdmin_screen', ['staff_detail'=> $staff_detail]);
    }
    public function edit($id){
        $staff = staff::where('id', $id)->first();
        return view('manageUserManagement.editStaff_screen', ['staff'=> $staff]);
    }
    public function update(Request $request, $id){
        $staff = staff::where('id', $id)->first();
        $staff -> update($request->all());
        return redirect('/stafflistadmin')->with('success', 'New Data Update');   
    }
    public function delete(Request $request, $id){
        $staff = staff::where('id', $id)->first();
        $staff -> delete($staff);
        return redirect('/stafflistadmin')->with('success', 'Data Delete');
    }
    public function create(Request $request){
        staff::create($request->all());
        return redirect('/stafflistadmin')->with('success', 'New Data Insert');
    }
}
