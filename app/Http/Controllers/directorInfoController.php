<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DirectorInfo;
class directorInfoController extends Controller
{
    public function store(Request $request)
    {
        //  dd($request->all());

        $validatedData = $request->validate([
            'director_name' => 'required',
            'director_position' => 'required',

        ]);

        $instituteId= $request->session()->get('instituteID');

        if($request->hasFile('director_iamge')) {
            $photoName = time() . '.' . $request->director_iamge->getClientOriginalExtension();

            $destinationPath = public_path('/DirectorImages');
            $request->director_iamge->move($destinationPath, $photoName);

        }else{
            $photoName="";
        }

        $director= new DirectorInfo([
                'institute_id' => $instituteId,
                'picture' =>$photoName,
                'description' => $request->input('director_description'),
                'position' => $request->input('director_position'),
                'name' => $request->input('director_name')
            ]
        );
        $director->save();

        return back()->with('status','Director added');

    }
}
