<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrugsController extends Controller
{
    public function drugs() {
        return view('Drugs')
            ->with('title','Drugs');
    }
}
