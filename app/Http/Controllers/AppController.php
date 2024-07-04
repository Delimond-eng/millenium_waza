<?php

namespace App\Http\Controllers;

use App\Models\EvolutionMission;
use App\Models\Mission;
use App\Traits\ValidationAndExceptionHandler;
use Illuminate\Http\Request;

class AppController extends Controller
{
    use ValidationAndExceptionHandler;

    /**
     * Summary of Mission Evolution
     * @param \Illuminate\Http\Request $request
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function createMission(Request $request){
         $rules = [
            "libelle"=> "required|string",
            "date_debut"=> "required|date|after_or_equal:today",
            "date_fin"=> "required|date|after_or_equal:date_debut",
            "user_id"=> "required|int",
            "job_id"=> "required|int|exists:jobs,id",
        ];
        //Valide,gere les exceptions et traite la requete et renvoie à la view le resultat
        return $this->validateAndHandle($request, $rules,  function($data) {
            return Mission::create($data);
        });
    }

    /**
     * Summary of getAllMissions
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function getAllMissions()
    {
        $missions = Mission::with("job")->with("user")->where("status", "actif")->get();
        return response()->json([
            "missions"=> $missions
        ]);
    }



    /**
     * Summary of createMissionEvolution
     * @param \Illuminate\Http\Request $request
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function createMissionEvolution(Request $request){
         $rules = [
            "phase_id" => "required|int|exists:phases,id",
            "user_id"=> "required|int",
        ];
        //Valide,gere les exceptions et traite la requete et renvoie à la view le resultat
        return $this->validateAndHandle($request, $rules,  function($data) {
            return EvolutionMission::create($data);
        });
    }

    /**
     * Summary of getAllMissionEvolutions
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function getAllMissionEvolutions()
    {
        $evolutionMissions = EvolutionMission::with("phase")->with("user")->where("status", "actif")->get();
        return response()->json([
            "evolution_missions"=> $evolutionMissions
        ]);
    }

}
