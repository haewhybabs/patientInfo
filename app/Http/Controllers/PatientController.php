<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index(){
        return view('admin.auth.patient_registration');
    }
    public function registration(Request $request){
        $validatedData = $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:patients',
            'address'=>'required',
            'weight'=>'required',
            'height'=>'required',
            'dob'=>'required',
            'phone_number'=>'required',
            'nok_email'=>'required',
            'nok_name'=>'required',
            'nok_phone_number'=>'required'
        ]);
        $newPatient = new Patient;
        $newPatient->name=$request->name;
        $newPatient->email = $request->email;
        $newPatient->address = $request->address;
        $newPatient->weight = $request->weight;
        $newPatient->height = $request->height;
        $newPatient->dob = $request->dob;
        $newPatient->phone_number=$request->phone_number;
        $newPatient->nok_name=$request->nok_name;
        $newPatient->nok_email=$request->nok_email;
        $newPatient->nok_phone_number = $request->nok_phone_number;
        $newPatient->save();
        
        $response = [
            'message'=>'Patient Information saved successfully',
            'alert-type'=>'success'
        ];

        return redirect()->back()->with($response);
    }

    public function patients(Request $request){
        $patients = Patient::all();
        return view('admin.patients.index',compact('patients'));
    }
    public function patientDetails(Request $request){
        $patient = Patient::find($request->query('patient_id'));
        return view('admin.patients.details',compact('patient'));
    }
}
