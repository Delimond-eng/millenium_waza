<?php

use App\Http\Controllers\SettingsController;
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
Route::get("/", function () {
    return view("dashboard", [
        "title"=>"Dashboard"
    ]);
});

Route::get("/settings.fonctions", function () {
    $fonctions = Fonction::where("status", "actif")->get();
    return view("pages.settings.fonctions", [
        "title" => "settings fonctions",
        "fonctions"=>$fonctions
    ]);
})->name("settings.fonctions");

//Route pour creer une fonctions
Route::post("/settings.fonctions.create", [SettingsController::class, 'createFonctions'])->name("settings.fonctions.create");