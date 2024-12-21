<?php

use Illuminate\Support\Facades\Route;

//Route::view('/', 'welcome');
Route::get('/', \App\Livewire\Mylanding::class)->name('landing');

//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');

Route::middleware(['signed', 'auth'])->group(function (){
    Route::get('/ad-dashboard', \App\Livewire\Admin\AdDashboard::class)->middleware(['auth', 'verified'])
        ->name('ad_dash');

    Route::get('/create', \App\Livewire\Admin\Create::class)->name('create');
    Route::get('/details', \App\Livewire\Admin\SeeDetails::class)->name('detail');
    Route::get('/edite-post/{post_id}', \App\Livewire\Admin\EditePost::class)->name('edite');


});

Route::get('/find-car/{n_car_id}', \App\Livewire\Admin\FindCar::class)->name('find_car');



//Route::view('profile', 'profile')
//    ->middleware(['auth'])
//    ->name('profile');

require __DIR__.'/auth.php';
