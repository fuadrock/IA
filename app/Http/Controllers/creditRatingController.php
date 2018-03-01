<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CreditRating;
class creditRatingController extends Controller
{
    public function store(Request $request)
    {
        //  dd($request->all());

        $validatedData = $request->validate([
            'company_name' => 'required',
            'rating_year' => 'required',
            'short_rating' => 'required',
            'long_rating' => 'required',
        ]);
        $instituteId= $request->session()->get('instituteID');

        $institute= new CreditRating([
                'institute_id' => $instituteId,
                'year' => $request->input('rating_year'),
                'short_term' => $request->input('short_rating'),
                'long_term' => $request->input('long_rating'),
                'source_name' => $request->input('company_name')
            ]
        );
        $institute->save();

        return back()->with('status','Credit rating added');

    }

}
