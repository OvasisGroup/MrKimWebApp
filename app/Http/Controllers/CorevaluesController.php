<?php

namespace App\Http\Controllers;

use App\Models\CoreValues;
use Illuminate\Http\Request;

class CorevaluesController extends Controller
{
    public function corevalues()
    {
        $values = CoreValues::orderBy('id', 'asc')->get();
        return view('corevalues', ['values' => $values]);
    }   
}
