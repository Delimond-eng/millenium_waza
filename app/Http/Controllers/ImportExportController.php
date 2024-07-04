<?php

namespace App\Http\Controllers;

use App\Models\Exportation;
use App\Models\Importation;
use App\Traits\ValidationAndExceptionHandler;
use Illuminate\Http\Request;

class ImportExportController extends Controller
{
     use ValidationAndExceptionHandler;


    /**
     * Create Exportation
     * @param Request $request
     * @return mixed
    */
    public function createExportation(Request $request){
        $rules = [
            'nif'=>'required|string',
            'position_tarifaire'=>'required|string',
            'cotation'=>'required|string',
            'fob'=>'required|string',
            'fret'=>'required|string',
            'num_bl_lta'=>'required|string',
            'port_destination_id'=>'required|int|exists:port_destinations,id',
            'date_arrivee'=>'required|date',
            'numero_av'=>'required|string',
            'nombre_colis'=>'required|int',
            'nature_marchandise'=>'required|string',
            'poids_kg'=>'required|string',
            'lieu_livraison'=>'required|string',
            'date_livraison'=>'required|date',
            'observation'=>'required|string',
            'user_id'=>'required|int',
            'fournisseur_id'=>'required|int|exists:fournisseurs,id',
            'transporteur_id'=>'required|int|exists:transporteurs,id',
            'moyen_expodition_id'=>'required|int|exists:moyen_expeditions,id',
            'client_id'=>'required|int|exists:clients,id',
        ];
        //Valide,gere les exceptions et traite la requete et renvoie à la view le resultat
        return $this->validateAndHandle($request, $rules,  function($data) {
            return Exportation::create($data);
        });
    }

    /**
     * Get all Exportations
     * @return mixed
    */
    public function getAllExportations()
    {
        $exportations = Exportation::where("status", "actif")->orderByDesc("id")->get();
        return response()->json([
            "exportations"=>$exportations
        ]);
    }

     /**
     * Create Importation
     * @param Request $request
     * @return mixed
    */
    public function createImportation(Request $request){
        $rules = [
            'nif'=>'required|string',
            'position_tarifaire'=>'required|string',
            'cotation'=>'required|string',
            'fob'=>'required|string',
            'fret'=>'required|string',
            'num_bl_lta'=>'required|string',
            'port_destination_id'=>'required|int|exists:port_destinations,id',
            'date_arrivee'=>'required|date',
            'numero_av'=>'required|string',
            'nombre_colis'=>'required|int',
            'nature_marchandise'=>'required|string',
            'poids_kg'=>'required|string',
            'lieu_livraison'=>'required|string',
            'date_livraison'=>'required|date',
            'observation'=>'required|string',
            'user_id'=>'required|int',
            'fournisseur_id'=>'required|int|exists:fournisseurs,id',
            'transporteur_id'=>'required|int|exists:transporteurs,id',
            'moyen_expodition_id'=>'required|int|exists:moyen_expeditions,id',
            'client_id'=>'required|int|exists:clients,id',
        ];
        //Valide,gere les exceptions et traite la requete et renvoie à la view le resultat
        return $this->validateAndHandle($request, $rules,  function($data) {
            return Importation::create($data);
        });
    }

    /**
     * Get all Importations
     * @return mixed
    */
    public function getAllImportations()
    {
        $importations = Importation::where("status", "actif")->orderByDesc("id")->get();
        return response()->json([
            "importations"=>$importations
        ]);
    }
}