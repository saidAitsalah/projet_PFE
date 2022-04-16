<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;

class DocController extends Controller
{
    //
    public function addpatient()
    {
         return view ('medecin.add_patient');

    }
    public function ajout(Request $request)
    {
       $patient= new patient;
       $image=$request->file;
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->file->move('patientimage',$imagename);
       $patient->photo=$imagename;

       $analyse=$request->radio;
       $nomimg=time().'.'.$analyse->getClientOriginalExtension();
       $request->radio->move('analyseimage',$nomimg);
       $patient->analyse=$nomimg;

       $patient->nom=$request->name;
       $patient->telephone=$request->number;
       $patient->profession=$request->profession;
       $patient->nationnalité=$request->nationnalité;
       $patient->dateNa=$request->dateN;
       $patient->lieuN=$request->lieuN;
       $patient->sexe=$request->sexe;
       $patient->adresse=$request->adresse;
       $patient->email=$request->mail;
       
       $patient->nomMedecin=$request->medcin;
       $patient->groupeSanguin=$request->groupe_sanguin;
       $patient->couvS=$request->couvertureS;
       $patient->maladie=$request->maladies;
       $patient->rapport=$request->rapport;
       $patient->medicament=$request->medicament;

       $patient->save();

       return redirect()->back()->with('message','dossier ajouté avec succées');









    }
   public function showpatient()
   {
       $info=patient::all();
     return view('medecin.show_patient',compact('info'));

     
   }

   public function deletepatient($id){
       $data=patient::find($id);
       $data->delete();
       return redirect()->back();



   }
   public function updatepatient($id)
   {
       $data=patient::find($id);
     return view('medecin.update_patient',compact('data'));
   }
   public function editpatient(Request $request,$id)

   {
      $patient=patient::find($id);
      $patient->nom=$request->name;
      $patient->telephone=$request->number;
      $patient->profession=$request->spécialité;
      $patient->nationnalité=$request->nationnalité;
      $patient->dateNa=$request->dateNa;
      $patient->lieuN=$request->lieuN;
      $patient->sexe=$request->sexe;
      $patient->adresse=$request->adresse;
      $patient->email=$request->email;

      $patient->nomMedecin=$request->medcin;
      $patient->groupeSanguin=$request->groupe_sanguin;
      $patient->couvS=$request->couvertureS;
      $patient->maladie=$request->maladies;
      $patient->rapport=$request->rapport;
      $patient->medicament=$request->medicament;


      $image=$request->radio;

      if($image)
      {


$imagename=time().'.'.$image->getClientOriginalExtension();

       $request->radio->move('analyseimage',$imagename);


      $patient->analyse=$imagename;

      }
   




      
    $patient->save();
    return redirect()->back();



   }
   public function afficher($id)
   {
            $data= patient::find($id);
            return view('medecin.afficher_patient',compact('data'));

   }


}
