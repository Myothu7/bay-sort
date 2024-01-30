<?php

namespace App\Http\Controllers;

use App\Models\Accommodation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AccommodationController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.accommodation.index', [
            'accommodation' => Accommodation::orderByDesc('id')->get(),
            'type' => [
                'Double Room', ' Executive Deluxe Room',
                'Deluxe Room', 'Executive Suite Room', 'Standard Room'
                ]
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
            'type' => 'required',
        ]);

        if($request->has('image')){
            $path = $request->file('image')->store('accommodation');
            $form_data = $request->all();
            $form_data['image'] = $path;
        }
        Accommodation::create($form_data);
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
        Accommodation::where('id',$id)->update($request->all());
        return back()->with('update', 'Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accommodation $accommodation)
    {
        $accommodation->delete();
        return back()->with('delete', 'Delete Successfully!');
    }
}
