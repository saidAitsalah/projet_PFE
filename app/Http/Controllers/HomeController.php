<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\doctor;
use App\Models\appointement;
use App\Models\patient;

class HomeController extends Controller
{
    public function index(){
        $role=Auth::user()->type;
        if($role=='0')
        {
            $doctor = doctor::all();
            return view('admin.home',compact('doctor'));

        }
        if($role=='1')
        {
            $doctor = doctor::all();
            return view('user.home',compact('doctor'));

        }
        else
        {
             return view('medecin.home');
        }
       


    }
    public function redirect()
    {
        $doctor = doctor::all();

        return view('user.home',compact('doctor'));
    }


    public function appointement(Request $request){
        $data = new appointement;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone=$request->phone;      
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='en progres';
        if(Auth::id()){
        $data->user_id=Auth::user()->id;
        }
       
       $data->save();
      
       return redirect()->back()->with('message','demande envoyé avec succes , on vous contactera bientôt');


    }
    public function myappointement(){
        if(Auth::id()){
            $user_id=Auth::user()->id;
            $appoint=appointement::where('user_id',$user_id)->get();
        return view('user.my_appointement',compact('appoint'));
          }
          else{
              return redirect()->back();
          }


    }
    public function cancel_appoint($id){
        $data=appointement::find($id);
        $data->delete();
        return redirect()->back();



    }

    public function monDossier(){
        if(Auth::id()){
            $user_id=Auth::user()->id;
            $dossier=patient::where('user_id',$user_id)->get();
        return view('user.dossierM',compact('dossier'));
          }
          else{
              return redirect()->back();
          }

}
}
