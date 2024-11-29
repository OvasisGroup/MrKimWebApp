<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowitworksController extends Controller
{
    public function howitworks()
    {
        // $values = Category::orderBy('id', 'asc')->get();
        return view('howitworks');
    }
}
