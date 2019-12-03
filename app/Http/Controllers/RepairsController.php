<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Repair;
use App\Property;
use Carbon\Carbon;
use Response;
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
        $request->validate([
            'construction_name'=>'bail|required|string|max:200',
            'construction_price'=>'required|numeric',
            'file'=>'file|mimes:pdf|max:2048',
        ]);

        if($file = $request -> file){
            $name = $file -> getClientOriginalname();;
            $target_path = public_path('/pdf_file/');
            $file->move($target_path,$name);
        }else{
            $name = "";
        }
            $property = Property::find($id);
            $repair = $property -> repairs() -> create([
            'construction_name' => $request->input('construction_name'),
            'construction_price' => $request->input('construction_price'),
            'pdf_filename' => $name,
            
            ]);
                
        

        return redirect()->route('owned_properties.show',[$id]);

        
    }

    public function approval_store($id)
    {   
        $repair = Repair::find($id);
        $approved_date = Carbon::now();
            $repair->is_approved = True;
            $repair->approved_date = $approved_date;
            $repair->save();
        return back();
    }

    public function get_download($id)
    {
        $pdf_filename = Repair::find($id)->pdf_filename;
        $path_to_file = public_path('/pdf_file/').'/'.$pdf_filename;
        return Response::download($path_to_file);
    }
}
