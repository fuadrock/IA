<?php

namespace App\Http\Controllers;

use App\Institute;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    public function create()
    {
        return view('institute.create');
    }
   public function store(Request $request)
   {
//       $this->validate($request, [
//           'institute_name' => 'required|unique:institutes|max:255',
//           'institute_founding_year' => 'required|min:4',
//           'institute_type' => 'required',
//           'institute_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//       ]);

       $photoName = time().'.'.$request->institute_image->getClientOriginalExtension();

           $destinationPath = public_path('/instituteImages');
       $request->institute_image->move($destinationPath, $photoName);



       $institute= new Institute([
               'name' => $request->input('institute_name'),
               'founding_year' => $request->input('institute_founding_year'),
               'type' => $request->input('institute_type'),
               'core_values' => json_encode($request->input('core_value')),
               'mission' => json_encode($request->input('mission')),
               'description' => $request->input('institute_description'),
                'images' => $photoName,
               'rating' => $request->input('rating'),
           ]
       );

       if($institute->save())
       {

           $instituteID = $institute->id;
           session(['instituteID' => $instituteID]);
           return back()->with('status','Institute added');
       }
       else
           return false;

   }

   public function show()
   {
       $institute=Institute::all();
       return view('institute.show',compact('institute'));

   }




}
