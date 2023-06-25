<?php

namespace App\Http\Controllers;

use App\Models\Appointement;
use Illuminate\Http\Request;
use App\Models\Doctor;



class AdminController extends Controller
{
    public function addview(){

        return view('admin.add_doctor');
    }
    public function upload(Request $request){
        $doctor=new doctor;
        $image=$request->file;
        $imagename=time().('.').$image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->room=$request->room;
        $doctor->speciallity=$request->spec_sele;
$doctor->save();
return redirect()->back()->with('message','doctor has been added succesfully');
        


    }

    public function showappointement(){
$data=appointement::all();

        return view('admin.showappointement',compact('data'));
    }
}
