<?php

namespace App\Http\Controllers;

use App\Models\NearbyAttraction;
use Illuminate\Http\Request;

class NearbyAttractionController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.nearby_attraction.index', [
            'nearby_attraction' => NearbyAttraction::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
        ]);

        if($request->has('image')){
            $path = $request->file('image')->store('nearby-attraction');
            $form_data = $request->all();
            $form_data['image'] = $path;
        }
        NearbyAttraction::create($form_data);
        return back()->with('create', 'Create Successfully!');
    }

    /**
     * Display the specified resource.
     */
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
        $request->validate([
            'name' => 'required|string|max:250',
            'category_id' => 'required',
        ]);
        NearbyAttraction::where('id',$id)->update($request->all());
        return back()->with('update', 'Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(NearbyAttraction $accommodation)
    // {
    //     $accommodation->delete();
    //     return back()->with('delete', 'Delete Successfully!');
    // }
}
