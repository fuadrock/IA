<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TdrInvestment;
class tDRInfoController extends Controller
{
   public function store(Request $request)
   {//['institute_id','deposit_fund','loan_fund','non_performing_ratio','credit_deposit_ratio','current_ratio','capital_adequacy_ratio','return_of_equity','authorized_capital','paid_up_capital'];

       $this->validate($request,[
           'deposit_fund'=>'required',
           'loan_fund'=>'required',
           'authorised_capital'=>'required',
           'paid_adequacy'=>'required',
           'nonperforming_loan_ratio'=>'required',
           'credit_deposit_ratio'=>'required',
           'current_ratio'=>'required',
           'capital_adequacy_ratio'=>'required',
           'return_of_equity'=>'required',
       ]);

       $instituteId= $request->session()->get('instituteID');
//       dd($value);

       $trdInfo=new TdrInvestment([
           'institute_id' => $instituteId,
           'deposit_fund' => $request->input('deposit_fund'),
           'loan_fund' => $request->input('loan_fund'),
           'non_performing_ratio' => $request->input('nonperforming_loan_ratio'),
           'credit_deposit_ratio' => $request->input('credit_deposit_ratio'),
           'current_ratio' => $request->input('current_ratio'),
           'capital_adequacy_ratio' =>$request->input('capital_adequacy_ratio'),
           'return_of_equity' => $request->input('return_of_equity'),
           'authorized_capital' => $request->input('authorised_capital'),
           'paid_up_capital' => $request->input('paid_adequacy'),
       ]);
       $trdInfo->save();
       return back()->with('status','Tdr information added');
   }
}
