<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $values = Category::orderBy('id', 'asc')->get();
        return view('category', ['values' => $values]);
    }
}
