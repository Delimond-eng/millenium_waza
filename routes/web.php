<?php


use App\Models\Fonction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

//All settings routes
include __DIR__."/settings/routes.php";


Route::get("/", function () {
    return view("dashboard", [
        "title"=>"Dashboard"
    ]);
});


Route::get("/settings.fonctions", function () {
    return view("pages.settings.fonctions", [
        "title" => "settings fonctions",
    ]);
});
