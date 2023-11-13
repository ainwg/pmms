<?php

namespace App\Http\Controllers\purchaseController;
namespace App\Http\Controllers;
use App\Models\inventory;
use App\Models\purchase;
use Illuminate\Http\Request;

class purchaseController extends Controller
{
    public function pos(){
        $data_purchase= \App\Models\purchase::all();
        $data_inventory= \App\Models\inventory::all();
        return view('manageInventory.pos_screen', ['data_inventory'=> $data_inventory],  ['data_purchase'=> $data_purchase]);
    }

    public function add(Request $request){
        $data_inventory= \App\Models\inventory::all();
        $data_purchase = \App\Models\purchase::all();
        \App\Models\purchase::create($request->all());
        return redirect('/pos')->with('success', 'New Data Insert');
    }

    public function pay(){
        $data_purchase = \App\Models\purchase::all();
        return view('manageInventory.payment_screen', ['data_purchase'=> $data_purchase]);
    }

}
