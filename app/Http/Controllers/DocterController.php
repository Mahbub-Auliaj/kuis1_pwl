<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocterController extends Controller
{
    public function doctor() {
        return view('Doctor')
            ->with('title','Doctors');
    }
}
