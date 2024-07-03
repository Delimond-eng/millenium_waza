<?php

namespace App\Http\Controllers;

use App\Models\Fonction;
use App\Traits\ValidationAndExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SettingsController extends Controller
{
    use ValidationAndExceptionHandler;
    /**
     * Configuration de la fonction
     * @param \Illuminate\Http\Request $request
     */
    public function createFonctions(Request $request)
    {
        $rules = [
            "libelle" => "required|string|unique:fonctions,libelle",
            "user_id"=>"required|int",
        ];
        // Recupere l'ID de l'utilisateur connecté
        $request->merge(['user_id' => 1]);

        //Valide,gere les exceptions et traite la requete et renvoie à la view le resultat
        return $this->validateAndHandle($request, $rules, 'settings.fonctions', function($data) {
            return Fonction::create($data);
        });
    }
}