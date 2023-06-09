<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('visiteur.menu');
});

Route::get("/menu", [CategorieController::class, "index"])->name("menu");
Route::get("/plats/{categorie}", [CategorieController::class, "plats"])->name("plats_categorie");