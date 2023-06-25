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
    public function canceled($id){
$data=appointement::find($id);
$data->status='Canceled';
$data->save();

        return redirect()->back();
    }
    public function approved($id){
        $data=appointement::find($id);
        $data->status='Approved';
        $data->save();
        
                return redirect()->back();
            }
            public function showdoctors(){

$docdata=doctor::all();

                return view('admin.showdoctors',compact('docdata'));
            }

            public function deletedoctor($id){
                $data=doctor::find($id);
                $data->delete();
              
                return redirect()->back();

            }
            public function updatedoctor($id){
                $data=doctor::find($id);
                return view('admin.updatedoctor',compact('data'));
            }
            public function editdoctor(Request $request,$id){

$doctor=doctor::find($id);
$image=$request->file;

if($image){
$imagename=time().('.').$image->getClientOriginalExtension();
$request->file->move('doctorimage',$imagename);
$doctor->image=$imagename;}
$doctor->name=$request->name;
$doctor->phone=$request->phone;
$doctor->room=$request->room;
$doctor->speciallity=$request->spec_sele;
$doctor->save();
return redirect()->back()->with('message','doctor has been updated succesfully');
        
            }
}
