<?php

use App\Http\Controllers\AccommodationController;
use App\Models\Accommodation;
use App\Models\NearbyAttraction;
use Illuminate\Support\Facades\Route;

Route::get('home', function() {
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
?>
