<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Property;

class PropertiesController extends Controller
{
    public function index()
    {
        $properties = DB::table('properties')->get();

        return view('properties.index',[
            'properties' => $properties,
        ]);
    }

    public function create()
    {
        $property = new Property;

        return view('properties.create',[
            'property'=>$property,
        ]);
    }

    public function store(Request $request)
    {
        $request -> validate([
            'property_name'=>'required|string|max:150',
        ]);

        $property =new Property;

        $property->property_name =$request->property_name;
        $property->save();

        return redirect('/owned_properties');
    }
}
