<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $values = Category::with('children')->whereNull('parent_id')->get();
        return view('categories/category', ['values' => $values]);
    }

    public function index()
    {
        $categories = Category::with('children')->whereNull('parent_id')->get();
        return view('categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'header_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('categories');
        }

        if ($request->hasFile('header_image')) {
            $validated['header_image'] = $request->file('header_image')->store('categories');
        }

        Category::create($validated);

        return redirect()->back()->with('success', 'Category added successfully.');
    }
    /**
     * Show the details of a single category.
     *
     * @param  Category  $category
     * @return \Illuminate\View\View
     */
    public function show(Category $category)
    {
        // Eager load children categories if needed
        // $subcategories = $category->children()->paginate(5);
        $category->load('children')->paginate(5);

        return view('categories.show', compact('category'));
    }
}
