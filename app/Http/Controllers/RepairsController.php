<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Repair;
use App\Property;
class RepairsController extends Controller
{
    
    public function repair_create($id)
    {
        $repair = new Repair;
        $property = DB::table('properties')->where('id',$id)->first();

        return view('repairs.create',[
            'repair'=>$repair,
            'property' => $property,
        ]);
    }

    public function repair_store(Request $request,$id)
    {  
        $this->validate($request,[
            'construction_name'=>'required|string|max:200',
            'construction_price'=>'required|numeric',
        ]);
            $property = Property::find($id);
            $repair = $property -> repairs() -> create([
            'construction_name' => $request->input('construction_name'),
            'construction_price' => $request->input('construction_price'),
            ]);
                
        

        return redirect()->route('owned_properties.show',[$id]);

        
    }
}
