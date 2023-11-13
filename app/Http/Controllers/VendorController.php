<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    
    public function ViewMainPage(){
        $data_vendor = \App\Models\vendor::all();
        return view('ManageVendor.VendorMainPage', ['data_vendor'=> $data_vendor]);
    }

    public function AddVendorPage(){
        $data_vendor = \App\Models\vendor::all();
        return view('ManageVendor.AddVendorPage', ['data_vendor'=> $data_vendor]);
    }

    public function ViewVendorPage(){
        $data_vendor = \App\Models\vendor::all();
        return view('ManageVendor.ViewVendorPage', ['data_vendor'=> $data_vendor]);
    }

    public function EditVendorPage(){
        $data_vendor = \App\Models\vendor::all();
        return view('ManageVendor.EditVendorPage', ['data_vendor'=> $data_vendor]);
    }

    public function create(Request $request){
        \App\Models\vendor::create($request->all());
        return redirect('/ViewVendorPage')->with('success', 'New Data Insert');
    }

    public function delete(Request $request, $id){
        $data_vendor = \App\Models\vendor::find($id);
        $data_vendor -> delete($data_vendor);
        return redirect('/ViewVendorPage')->with('success', 'Data Delete');
    }

    public function edit($id){
        $data_vendor = \App\Models\vendor::find($id);
        return view('ManageVendor.EditVendorPage', ['data_vendor'=> $data_vendor]);
    }

    public function update(Request $request, $id){
        $data_vendor = \App\Models\vendor::find($id);
        $data_vendor -> update($request->all());
        return redirect('/ViewVendorPage')->with('success', 'New Data Update');
        
    }

}
