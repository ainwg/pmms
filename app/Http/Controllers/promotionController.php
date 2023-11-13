<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\promotion;

class promotionController extends Controller
{
    public function createAdmin(Request $request){
        promotion::create($request->all());
        return redirect('/promotionadmin')->with('success', 'New Data Insert');
    }
    public function addpromotion(){
        $promotion = promotion::all();
        return view('managePromotion.addPromotion_screen');
        
    }
    public function index(){
        $promotion = promotion::all();
        return view('managePromotion.home_screen', ['promotion'=> $promotion]);
        
    }
    public function indexAdmin(){
        $promotion = promotion::all();
        return view('managePromotion.promotion_screen', ['promotion'=> $promotion]);
        
    }
    public function edit($id){
        $promotion = promotion::where('id', $id)->first();
        return view('managePromotion.editPromotion_screen', ['promotion'=> $promotion]);
    }
    public function update(Request $request, $id){
        $promotion = promotion::where('id', $id)->first();
        $promotion -> update($request->all());
        return redirect('/promotionadmin')->with('success', 'New Data Update');   
    }
    public function delete(Request $request, $id){
        $promotion = promotion::where('id', $id)->first();
        $promotion -> delete($promotion);
        return redirect('/promotionadmin')->with('success', 'Data Delete');
    }
    public function detail($id){

        $promotiondetails = promotion::where('id', $id)->first();
        return view('managePromotion.promotionDetails_screen', ['promotiondetails'=> $promotiondetails]);
       
    }
   
    
}
