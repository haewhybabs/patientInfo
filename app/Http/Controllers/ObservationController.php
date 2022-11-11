<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Observation;
class ObservationController extends Controller
{
    public function observations(Request $request){
        $patientId = $request->query('patient_id');
        $patient = Patient::with(['observations'=>function($q){
            $q->orderBy('created_at', 'DESC');
        },'observations.doctor'])->find($patientId);
        return view('admin.observations.index',compact('patient'));
    }
    public function create(Request $request){
        $validatedData = $request->validate([
            'diagnosis'=>'required',
            'observation'=>'required'
        ]);
        $newObservation = new Observation;
        $newObservation->diagnosis = $request->diagnosis;
        $newObservation->observation=$request->observation;
        $newObservation->patient_id = $request->patient_id;
        $newObservation->doctor_id = auth()->user()->id;
        $newObservation->save();
        $response = [
            'message'=>'Observation created successfully',
            'alert-type'=>'success'
        ];

        return redirect()->back()->with($response);
    }
}
