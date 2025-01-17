<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $existingCategory = Category::where('name', $request->name)->first();
        if ($existingCategory) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Category already exists.',
                ], 400);
            }
            return redirect()->back()->with('error', 'Category already exists.');
        }

        $category = Category::create($request->only('name'));

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'category' => $category,
            ]);
        }

        return redirect()->back()->with('success', 'Category created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $sliders = $category->sliders;
        return view('categories.show', compact('category', 'sliders'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update($request->all());
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }

}