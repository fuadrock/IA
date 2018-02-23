<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DepositRate;
class depositeInfoController extends Controller
{
   public function store(Request $request)
   {
       dd($request->all());

//       $validatedData = $request->validate([
//           'name' => 'required|unique:institutes|max:255',
//           'founding_year' => 'required',
//           'type' => 'required',
//           'core_values' => 'required',
//           'mission' => 'required',
//           'description' => 'required',
//       ]);
//       $institute= new Institute([
//               'name' => $request->input('name'),
//               'founding_year' => $request->input('founding_year'),
//               'type' => $request->input('type'),
//               'core_values' => $request->input('core_values'),
//               'mission' => $request->input('mission'),
//               'description' => $request->input('description')
//           ]
//       );
//       $institute->save();

       return redirect('institute.show')->with('status','Institute added');

   }
}
