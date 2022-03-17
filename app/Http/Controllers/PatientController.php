<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function patient() {
        $data = Patient::all();
        return view('Patient',['patient'=>$data])
            ->with('title','Patient');
    }


}
