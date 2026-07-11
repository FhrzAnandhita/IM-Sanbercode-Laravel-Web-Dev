<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categories()
    {
        $categories = Categories::all();

        return view('pages.categories', compact('categories'));
    }

    public function create()
    {
        return view('pages.categories_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        Categories::create($request->all());

        return redirect()->route('categories.index');
    }

    public function edit(Categories $categories)
    {
        return view('pages.categories_edit', compact('categories'));
    }

    public function update(Request $request, Categories $categories)
    {
        $categories->update($request->all());

        return redirect()->route('categories.index');
    }

    public function destroy(Categories $categories)
    {
        $categories->delete();

        return redirect()->route('categories.index');
    }
}
