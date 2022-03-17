<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DocterController extends Controller
{
    public function doctor() {
        $data = Doctor::all();
        return view('Doctor',['doctor'=>$data])
            ->with('title','Doctors');
    }
}
