<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::middleware("auth")->group(function(){
// });

Route::get("/katalog",[KatalogController::class, "index"])->name("katolog");

Route::get("/add-cart/{id}", [CartController::class, "index"])->name("cart");


Route::middleware("guest")->group(function(){

    Route::get("/login", [LoginController::class, "create"])->name("login");
    Route::post("/login", [LoginController::class, "store"]);
    
    Route::get("/register", [RegistrationController::class, "create"])->name("register");
    Route::post("/register", [RegistrationController::class, "store"]);

    // landing page
    Route::get("/", fn() => view("landingpage.home"));
    Route::get("/about", fn() => view("landingpage.about"));
    Route::get("/contact", fn() => view("landingpage.contact"));

});

// Route::get('/', function () {
//     return view('welcome');
// });
