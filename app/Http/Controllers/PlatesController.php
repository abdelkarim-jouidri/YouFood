<?php

namespace App\Http\Controllers;

use App\Models\Plate;
use Illuminate\Http\Request;

class PlatesController extends Controller
{
    //
    public function index(){
        return view('plate',['plates'=>Plate::simplePaginate(6)]);
    }

    public function store(Request $request){
        dd($request);
        $formFields = $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images','public');
        }

        // dd($formFields);
        Plate::create($formFields);
        return redirect('/plates')->with('message','Plate successfully added!!');
    }
    public function create(){
        return view('plates.create');
    }

    public function edit(Plate $plate){
        return view('plates.edit',['plate'=>$plate]);
    }

    public function update(Request $request, Plate $plate){
        $formFields = $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);

        $plate->update($formFields);
        return back();
    }

    public function destroy(Plate $plate){
        $plate->delete();
        return redirect('/plates');
    }
}
