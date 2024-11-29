<?php

namespace App\Http\Controllers;

use App\Models\Legal;
use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function legal()
    {
        $legallist = Legal::all();
        return view('legal', ['legallist' => $legallist]);
    }

    public function product_details($product_slug)
    {

        $product = Legal::where('id', $product_slug)->first();
        // Return the detail view with the record data
        return view('details', ['product' => $product]);
        // return view('details',['onelegal' => $onelegal]);
    }
}
