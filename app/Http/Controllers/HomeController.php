<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointement;




class HomeController extends Controller
{
    public function redirect(){


        if(Auth::id()){
if(Auth::user()->usertype=='0'){
    $doctor=doctor::all();

    return view('user.home',compact('doctor'));
}
else{
    return view('admin.home');
}
        }
        else{
            return redirect()->back();
        }
    }
    public function index(){
        if(Auth::id()){
            return redirect('home');
        }
$doctor=doctor::all();

        return view('user.home',compact('doctor'));
    }
    public function appointement(Request $request){
        $data= new appointement;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->number;
        $data->date=$request->date;
        $data->message=$request->message;
        $data->doctor=$request->doc;
        $data->status='In progress';
        if(Auth::id()){
        $data->user_id=Auth::user()->id;
 
        }

$data->save();
return redirect()->back()->with('message','Appointement successful,we will contact with you soon');
    }
    public function myappointement(){
if(Auth::id()){

    $userid=Auth::user()->id;
    $appoint=appointement::where('user_id',$userid)->get();
        return view('user.my_appointement',compact('appoint'));}
        else{
            return redirect()->back();
        }
    }

    public function cancelapp($id){



        $data=appointement::find($id);
        $data->delete();
        return redirect()->back();
    }
}
