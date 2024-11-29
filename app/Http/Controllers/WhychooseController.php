<?php

namespace App\Http\Controllers;

use App\Models\WhyChooseUs;
use Illuminate\Http\Request;

class WhychooseController extends Controller
{
    public function whychooseus()
    { 
        $whyus = WhyChooseUs::orderBy('id', 'asc')->get();
        return view('whychooseus', ['whyus' => $whyus]);
    }
}
