<?php

use App\Http\Controllers\AccommodationController;
use App\Models\Accommodation;
use App\Models\Facility;
use App\Models\NearbyAttraction;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('frontend.index');
})->name('index');

Route::get('shop_with_us', function() {
    return view('frontend.shop_with_us');
})->name('shop');

Route::get('health_and_fitness', function() {
    return view('frontend.health_and_fitness');
})->name('health');

Route::get('accommodation', function() {
    return view('frontend.accommodation', [
        'accommodation' => Accommodation::all(),
    ]);
})->name('accommodation');

Route::get('nearby_attraction', function() {
    return view('frontend.naerby_attraction', [
        'nearby_attraction' => NearbyAttraction::all()
    ]);
})->name('nearby_attraction');

Route::get('recreation_facilities', function() {
    return view('frontend.recreational_facilities', [
        'facilities' => [
            'internal' => Facility::where('type', '=', 'internal')->get(),
            'external' =>  Facility::where('type', '=', 'external')->get()
        ]
    ]);
})->name('facilities');

Route::get('about_us', function() {
    return view('frontend.about_us', ['facilities' => [
        'internal' => Facility::where('type', '=', 'internal')->limit(4)->get(),
    ]]);
})->name('about_us');

Route::get('contact', function() {
    return view('frontend.contact');
})->name('contact');
?>


