<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.facility.index', [
            'facilities' => Facility::all(),
            'type' => ['external', 'internal']
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
            'name' => 'required|string|max:250|unique:facilities',
            'type' => 'required',
        ]);

        if($request->has('image')){
            $path = $request->file('image')->store('accommodation');
            $form_data = $request->all();
            $form_data['image'] = $path;
        }
        Facility::create($form_data);

        return back()->with('create', 'Create Successfully!');
    }
}
