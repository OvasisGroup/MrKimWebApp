<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $values = Category::orderBy('id', 'asc')->get();
        return view('home', ['values' => $values]);
    }

    public function product_details($product_slug)
    {

        $product = Category::where('id', $product_slug)->first();
        // Return the detail view with the record data
        return view('legal_details', ['product' => $product]);
    }
}
