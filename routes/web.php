<?php

use Illuminate\Support\Facades\Route;

//front (landing)
Use App\Http\Controllers\Landing\LandingController;     


//member (dashboard)
Use App\Http\Controllers\Dashboard\MemberController;     
Use App\Http\Controllers\Dashboard\MyOrderController;
Use App\Http\Controllers\Dashboard\ProfileController;
Use App\Http\Controllers\Dashboard\RequestController;
Use App\Http\Controllers\Dashboard\ServiceController;



//


route::get('detail_booking/{id}', landingController::class,'detail_booking')->name('detail.booking.landing');
route::get('detail/{id}', landingController::class,'detail')->name('detail.landing');
route::get('booking/{id}', landingController::class,'booking')->name('booking.landing');
route::get('explore', landingController::class,'explore')->name('explore.landing');
route::resource('/', landingController::class);



route::group(['prefix' => 'member', 'as' => 'member.', 'middleware' => ['auth:sanctum','verified'],],
function(){

    //dashboard
    route::resource('dashboard', MemberController::class);

    //service
    route::resource('service', ServiceController::class);

    //request
    route::get('approve_request/{id}', RequestController::class,'approve')->name('approve.request');
    route::resource('request', RequestController::class);

    //my order
    route::get('accept/order/{id}', MyOrderController::class,'accepted')->name('accept.order');
    route::get('reject/order/{id}', MyOrderController::class,'rejected')->name('reject.order');
    route::resource('order', MyOrderController::class);

    //profile
    route::get('delete_photo', ProfileController::class,'delete')->name('delete.photo.profile');
    route::resource('profile', ProfileController::class);

});





/*

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
/*