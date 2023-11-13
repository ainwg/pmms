<?php

namespace App\Http\Controllers\transactionController;
namespace App\Http\Controllers;
use App\Models\transaction;
use Illuminate\Http\Request;

class transactionController extends Controller
{
    public function cash(Request $request){
        $data_transaction = \App\Models\transaction::all();
        \App\Models\transaction::create($request->all());
        return view('manageInventory.paymentCash_screen', ['data_transaction'=> $data_transaction]);
    }

    public function balance(){
        $data_transaction = \App\Models\transaction::all();
        return view('manageInventory.balance_screen', ['data_transaction'=> $data_transaction]);
    }

    public function qr(){
        $data_transaction = \App\Models\transaction::all();
        return view('manageInventory.paymentQr_screen', ['data_transaction'=> $data_transaction]);
    }

    public function success(){
        $data_transaction = \App\Models\transaction::all();
        return view('manageInventory.qrSuccessfull_screen', ['data_transaction'=> $data_transaction]);
    }
}
