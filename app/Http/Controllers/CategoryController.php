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
        return view('dashboard.category.index', [
            'categories' => Category::orderByDesc('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:250|unique:categories',
        ]);

        Category::create(['name'=>$request->name]);
        return back()->with('create', 'Create Successfully!');
    }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Category::where('id', $id)->update(['name'=>$request->name]);
        return back()->with('update', 'Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('delete', 'Delete Successfully!');
    }
}
