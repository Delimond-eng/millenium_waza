<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ImportExportController;
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

//CREATE NEW MISSION
Route::post("mission.create",[AppController::class, "createMission"])->name("mission.create");

//GET ALL MISSIONS LIST
Route::post("/missions", [AppController::class, "getAllMissions"])->name("missions");

//GET ALL IMPORTATIONS LIST
Route::get("/importations", [ImportExportController::class, "getAllImportations"])->name("importations");

//CREATE NEW IMPORTATION
Route::post("/importation.create", [ImportExportController::class, "createImportation"])->name("importation.create");

//GET ALL IMPORTATIONS LIST
Route::get("/exportations", [ImportExportController::class, "getAllExportations"])->name("exportations");

//CREATE NEW IMPORTATION
Route::post("/exportation.create", [ImportExportController::class, "createExportation"])->name("exportation.create");


Route::get("/", function () {
    return view("dashboard", [
        "title"=>"Dashboard"
    ]);
});


Route::get("/settings.fonctions", function () {
    return view("pages.settings.fonctions", [
        "title" => "settings fonctions",
    ]);
})->name("settings.fonctions");

Route::get("/settings.users", function () {
    return view("pages.settings.users", [
        "title" => "settings users",
    ]);
})->name("settings.fonctions");
