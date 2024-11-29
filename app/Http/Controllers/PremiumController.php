<?php

namespace App\Http\Controllers;

use App\Models\Premium;
use Illuminate\Http\Request;

class PremiumController extends Controller
{
    public function premium()
    {
        $premium = Premium::all();
        return view('premium', compact('premium'));
    }
}
