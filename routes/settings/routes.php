<?php

use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

//GET USERS LIST
Route::get('/users', [SettingsController::class, 'getAllUsers'])->name('users');
//CREATE USER
Route::post('/user.create', [SettingsController::class, 'createUser'])->name("user.create");

//GET FONCTIONS LIST
Route::get('/fonctions', [SettingsController::class, 'getAllFonctions'])->name('fonctions');
//CREATE FONCTION
Route::post('/fonction.create', [SettingsController::class, 'createFonction'])->name("fonction.create");

//GET VILLE LIST
Route::get('/villes', [SettingsController::class, 'getAllVilles'])->name('villes');
//CREATE VILLE
Route::post('/ville.create', [SettingsController::class, 'createVille'])->name("ville.create");

//GET MENU LIST
Route::get('/menus', [SettingsController::class, 'getAllMenus'])->name('menus');
//CREATE MENU
Route::post('/menu.create', [SettingsController::class, 'createMenu'])->name("menu.create");

//GET ROLE LIST
Route::get('/roles', [SettingsController::class, 'getAllRoles'])->name('roles');
//CREATE ROLE
Route::post('/role.create', [SettingsController::class, 'createRole'])->name("role.create");

//GET NATURE ACTEUR LIST
Route::get('/nature_acteurs', [SettingsController::class, 'getAllNatureActeurs'])->name('nature_acteurs');
//GET NATURE JOB
Route::get('/nature_jobs', [SettingsController::class, 'getAllNatureJob'])->name('nature_jobs');


//CREATE ROLE
Route::post('/nature_acteur.create', [SettingsController::class, 'createNatureActeur'])->name("nature_acteur.create");
//CREATE Nature job
Route::post('/nature_job.create', [SettingsController::class, 'createNatureJob'])->name("nature_job.create");

//GET PHASE LIST
Route::get('/phases', [SettingsController::class, 'getAllPhases'])->name('phases');
//CREATE PHASE
Route::post('/phase.create', [SettingsController::class, 'createPhase'])->name("phase.create");

//GET PORT LIST
Route::get('/ports', [SettingsController::class, 'getAllPorts'])->name('ports');
//CREATE PORT
Route::post('/ports.create', [SettingsController::class, 'createPort'])->name("port.create");

//GET PORT DESTINATION LIST
Route::get('/fournisseurs', [SettingsController::class, 'getAllFournisseurs'])->name('fournisseurs');
//CREATE PORT
Route::post('/fournisseur.create', [SettingsController::class, 'createFournisseur'])->name("fournisseur.create");

//GET HABILITATION LIST
Route::get('/habilitations', [SettingsController::class, 'getAllHabilitations'])->name('habilitations');
//CREATE PORT
Route::post('/habilitation.create', [SettingsController::class, 'createHabilitation'])->name("habilitation.create");

//GET TRANSPORTEURS LIST
Route::get('/transporteurs', [SettingsController::class, 'getAllTransporteurs'])->name('transporteurs');
//CREATE PORT
Route::post('/transporteur.create', [SettingsController::class, 'createTransporteur'])->name("transporteur.create");

//GET SITES LIST
Route::get('/sites', [SettingsController::class, 'getAllSites'])->name('sites');
//CREATE SITE
Route::post('/site.create', [SettingsController::class, 'createSite'])->name("site.create");

//GET SITES LIST
Route::get('/jobs', [SettingsController::class, 'getAllJobs'])->name('jobs');
//CREATE SITE
Route::post('/job.create', [SettingsController::class, 'createJob'])->name("job.create");

//GET SITES LIST
Route::get('/clients', [SettingsController::class, 'getAllClients'])->name('clients');
//CREATE SITE
Route::post('/client.create', [SettingsController::class, 'createClient'])->name("client.create");

//GET MOYEN EXPORTATION LIST
Route::get('/moyen_expeditions', [SettingsController::class, 'getAllMoyenExpeditions'])->name('clients');
//CREATE MOYEN EXPORTATION
Route::post('/moyen_expedition.create', [SettingsController::class, 'createMoyenExpedition'])->name("moyen_expedition.create");
