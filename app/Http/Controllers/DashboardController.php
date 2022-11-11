<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Observation;
use App\Models\Patient;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $observations = Observation::count();
        $doctors = User::count();
        $patients = Patient::count();
        return view('admin.dashboard.index',compact('observations','doctors','patients'));
    }
}
