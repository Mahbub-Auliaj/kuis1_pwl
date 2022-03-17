<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function patient() {
        return view('Patient')
            ->with('title','Patient');
    }
}
