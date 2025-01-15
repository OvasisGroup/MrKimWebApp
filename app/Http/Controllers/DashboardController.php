<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Get the currently authenticated user
        $category = Category::with('children')->whereNull('parent_id')->get();
        return view('admin.dashboard', compact('category', 'user'));
    } 
}
