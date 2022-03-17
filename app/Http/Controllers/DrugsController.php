<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;

class DrugsController extends Controller
{
    public function drugs() {
        $data = Drug::all();
        return view('Drugs',['drug'=>$data])
            ->with('title','Drugs');
    }
}
