<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function supplier() {
        $data = Supplier::all();
        return view('Supplier',['supplier'=>$data])
            ->with('title','Supplier');
    }
}
