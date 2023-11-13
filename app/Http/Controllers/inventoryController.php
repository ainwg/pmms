<?php

namespace App\Http\Controllers\inventoryController;
namespace App\Http\Controllers;
use App\Models\inventory;
use Illuminate\Http\Request;

class inventoryController extends Controller
{
    public function index(){
        $data_inventory = \App\Models\inventory::all();
        return view('manageInventory.inventory_screen', ['data_inventory'=> $data_inventory]);
    }

    public function form(){
        $data_inventory = \App\Models\inventory::all();
        return view('manageInventory.inventoryAdd_screen', ['data_inventory'=> $data_inventory]);
    }

    public function create(Request $request){
        \App\Models\inventory::create($request->all());
        return redirect('/inventory')->with('success', 'New Data Insert');
    }

    public function confirm(Request $request, $id){
        $data_inventory = \App\Models\inventory::all();
        return view('manageInventory.inventoryDelete_screen', ['id' => $id]);
    }

    public function delete(Request $request, $id){
        $data_inventory = \App\Models\inventory::find($id);
        $data_inventory -> delete($data_inventory);
        return redirect('/inventory')->with('success', 'Data Delete');
    }

    public function edit($id){
        $data_inventory = \App\Models\inventory::find($id);
        return view('manageInventory.inventoryEdit_screen', ['data_inventory'=> $data_inventory]);
    }

    public function update(Request $request, $id){
        $data_inventory = \App\Models\inventory::find($id);
        $data_inventory -> update($request->all());
        return redirect('/inventory')->with('success', 'New Data Update');
    }

}
