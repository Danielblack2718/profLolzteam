<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RobloxController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ProxyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', [ViewController::class, "index"])->name("index");

Route::get('/buy', [ViewController::class, "buy"])->name("buy");

Route::get('/faq', [ViewController::class, "faq"])->name("faq");

Route::get('/purchases', [ViewController::class, "purchases"])->name("purchases");

Route::group(['prefix' => 'panel'], function () {



    Route::group(['prefix' => 'api'], function () {
        Route::post('/register', [UserController::class, 'register'])->name("api.register");
        Route::post('/login', [UserController::class, "login"])->name("api.login");
        Route::post('/logout', [UserController::class, "logout"])->name("api.logout")->middleware('CheckLogin');
        Route::post('/proxy/add', [ProxyController::class, "add"])->name("api.proxy.add")->middleware('CheckLogin');
        Route::post('/proxy/delete', [ProxyController::class, "delete"])->name("api.proxy.delete")->middleware('CheckLogin');
        Route::post('/account/add', [AccountController::class, "add"])->name("api.account.add")->middleware('CheckLogin');
    });

    Route::get('/', [DashboardController::class, "panel"])->name("panel")->middleware('CheckLogin');
    
    Route::get('/register', [DashboardController::class, "register"])->name("register");
    
    Route::get('/login', [DashboardController::class, "login"])->name("login");
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, "index"])->name("admin")->middleware('CheckAdmin');

    Route::get('/login', function () {
        return view('loginAdmin');
    })->name("admin.login");

    Route::group(['prefix' => 'api'], function () {
        Route::post('/login', [AdminController::class, "login"])->name("api.admin.login");
        Route::get('/logout', [AdminController::class, "logout"])->name("api.admin.logout")->middleware('CheckAdmin');
        Route::post('/rate', [AdminController::class, "rate"])->name("api.admin.rate")->middleware('CheckAdmin');
        Route::post('/retry', [AdminController::class, "retry"])->name("api.admin.retry")->middleware('CheckAdmin');
    });


});

Route::group(['prefix' => 'api'], function () {

    Route::post('/getRobloxAccounts', [RobloxController::class, "getRobloxAccounts"])->name("api.getRobloxAccounts");
    Route::post('/getPlaces', [RobloxController::class, "getPlaces"])->name("api.getPlaces");
    Route::post('/createTransaction', [RobloxController::class, "createTransaction"])->name("api.createTransaction");
    Route::post('/successTransaction', [RobloxController::class, "successTransaction"])->name("api.successTransaction");
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/login', [ClientController::class, "login"])->name("api1.login");
    Route::post('/logout', [UserController::class, "logout"])->name("api.logout")->middleware('CheckLogin');
});
