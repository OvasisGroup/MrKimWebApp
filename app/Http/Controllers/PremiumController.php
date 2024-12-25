<?php

namespace App\Http\Controllers;

use App\Models\Premium;
use Illuminate\Http\Request;

class PremiumController extends Controller
{
    public function premium()
    {
        // $prem = Premium::all();
        // return view('premium', compact('prem'));
        return response()->json(['message' => 'Premium route is working']);
    }
}
