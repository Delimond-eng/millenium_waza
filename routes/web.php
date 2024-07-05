<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ImportExportController;
use App\Models\Fonction;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::middleware(['auth'])->group(function () {

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

    //Home Dashboard route
    Route::get("/", function () {
        return view("dashboard", [
            "title"=>"Dashboard"
        ]);
    });

    //Setting fonction Route
    Route::get("/settings.fonctions", function () {
        return view("pages.settings.fonctions", [
            "title" => "settings fonctions",
        ]);
    })->name("settings.fonctions");

    //Setting user routes
    Route::get("/settings.users", function () {
        return view("pages.settings.users", [
            "title" => "settings users",
        ]);
    })->name("settings.fonctions");

     //Setting nature job Route
     Route::get("/settings.naturejob", function () {
        return view("pages.settings.naturejob", [
            "title" => "settings naturejob",
        ]);
    })->name("settings.fonctions");

     //Setting  job Route
     Route::get("/settings.job", function () {
        return view("pages.settings.job", [
            "title" => "settings job",
        ]);
    })->name("settings.job");

     //Setting  phase
     Route::get("/settings.phase", function () {
        return view("pages.settings.phase", [
            "title" => "settings phase",
        ]);
    })->name("settings.phase");



});
