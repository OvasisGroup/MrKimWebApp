<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SafetyController extends Controller
{
    public function safety()
    {
        return view('safety');
    } 
}
