<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use App\Models\patient;
use App\Models\appointement;



class AdminController extends Controller
{
    //
    public function addview(){


        return view('admin.add_doctor');
    }

   public function upload(Request $request)
   {
       $doctor=new doctor;

       $image=$request->file;

    $imagename=time().'.'.$image->getClientOriginalExtension();

    $request->file->move('doctorimage',$imagename);


       $doctor->image=$imagename;

       $doctor->name=$request->name;

       $doctor->number=$request->number;

       $doctor->specialité=$request->specialité;

       $doctor->nationnalité=$request->nationnalité;

       $doctor->dateN=$request->dateN;

       $doctor->adresse=$request->adresse;
       
       $doctor->email=$request->mail;
        
       $doctor->save();
       return redirect()->back()->with('message','le medecin est ajouté avec succes');


   }

   public function showappointement(){
       $data = appointement::all();
       $term = 'approuvé';
       $dat = appointement::where('status','LIKE','%'.$term.'%')->get();


    return view ('admin.showappointement',compact('data','dat'));
   }

  

   
   public function approved($id){

    $data=appointement::find($id);
    $data->status='approuvé';
    $data->save();

    return redirect()->back();




   }

   public function canceled($id){

    $data=appointement::find($id);
    $data->status='annulé';
    $data->save();

    return redirect()->back();




   }

   public function showdoctor()
   {
       $data= doctor::all();

    return view('admin.showdoctor',compact('data'));


   }
   public function deletedoctor($id)
   {
            $data = doctor::find($id);
            $data->delete();
            return redirect()->back();

   }
   public function updatedoctor($id)
   {
            $data= doctor::find($id);
            return view('admin.update_doctor',compact('data'));

   }
   public function editdoctor(Request $request, $id){
       $doctor = doctor::find($id);

       $doctor->name=$request->name;
       $doctor->number=$request->number;
       $doctor->specialité=$request->specialité;
       $doctor->nationnalité=$request->nationnalité;
       $doctor->dateN=$request->dateN;
       $doctor->adresse=$request->adresse;
       $doctor->email=$request->email;


       
       $image=$request->file;

       if($image)
       {


$imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('doctorimage',$imagename);


       $doctor->image=$imagename;

       }
    
       
       $doctor->save();

       return redirect()->back()->with('message','medecin edité avec succés');



   }
    public function patientsearch(Request $request) 
    
    {
        $name = $request->input('name');
        $patient= patient::where('nom','LIKE','%'.$name.'%')->get();
        return view('medecin.consult_patient',compact('patient'));


    }
    public function doctorsearch(Request $request) 
    
    {
        $name = $request->input('name');
        $doctor= doctor::where('name','LIKE','%'.$name.'%')->get();
        return view('admin.consult_doctor',compact('doctor'));


    }


}
