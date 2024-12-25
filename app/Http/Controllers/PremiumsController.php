<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PremiumsController extends Controller
{
    public function premiums()
    {
    // $prem = Premium::all();
    return view('premiums');
    // return response()->json(['message' => 'Premium route is working']);
    }
}