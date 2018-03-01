<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DepositRate;
class depositeInfoController extends Controller
{
   public function store(Request $request)
   {
     //  dd($request->all());

       $validatedData = $request->validate([
           'three_month_rate' => 'required',
           'six_month_rate' => 'required',
           'twelve_month_rate' => 'required',
           'double_money_rate' => 'required',
       ]);
       $instituteId= $request->session()->get('instituteID');

       $institute= new DepositRate([
               'institute_id' => $instituteId,
               '3-month_rate' => $request->input('three_month_rate'),
               '6-month_rate' => $request->input('six_month_rate'),
               '12-month_rate' => $request->input('twelve_month_rate'),
               'double-money_rate' => $request->input('double_money_rate')
           ]
       );
       $institute->save();

       return back()->with('status','Deposit information added');

   }
}
