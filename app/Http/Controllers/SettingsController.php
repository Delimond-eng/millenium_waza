<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Fonction;
use App\Models\Fournisseur;
use App\Models\Habilitation;
use App\Models\Job;
use App\Models\LogFile;
use App\Models\Menu;
use App\Models\MoyenExpedition;
use App\Models\NatureActeur;
use App\Models\NatureJob;
use App\Models\Phase;
use App\Models\Port;
use App\Models\PortDestination;
use App\Models\Role;
use App\Models\Site;
use App\Models\Transporteur;
use App\Models\User;
use App\Models\Ville;
use App\Traits\ValidationAndExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SettingsController extends Controller
{
    use ValidationAndExceptionHandler;

    /**
     * Create Viles
     * @return mixed
    */
    public function createVille(Request $request){
         $rules = [
            "libelle" => "required|string"
        ];
        //Valide,gere les exceptions et traite la requete et renvoie à la view le resultat
        return $this->validateAndHandle($request, $rules,  function($data) {
            return Ville::updateOrCreate(["libelle"=>$data["libelle"]],$data);
        });
    }

    /**
     * Retourne la liste de toutes les villes
     * @return mixed
     */
    public function getAllVilles(){
        $villes = Ville::where("status","actif")->get();
        return response()->json(["villes"=> $villes]);
    }


    /**
     * Configuration de la fonction
     * @param \Illuminate\Http\Request $request
     */
    public function createFonction(Request $request)
    {
        $rules = [
            "libelle" => "required|string|unique:fonctions,libelle",
            "description"=>"nullable|string",
            "user_id"=>"required|int",
        ];
        // Recupere l'ID de l'utilisateur connecté
        $request->merge(['user_id' => Auth::id()]);

        //Valide,gere les exceptions et traite la requete et renvoie à la view le resultat
        return $this->validateAndHandle($request, $rules,  function($data) {
            return Fonction::updateOrCreate(["libelle"=>$data["libelle"]],$data);
        });
    }

    /**
     * Retourne la liste de toutes les fonctions
     * @return mixed
     */
    public function getAllFonctions(){
        $fonctions = Fonction::where("status","actif")->orderByDesc("id")->get();
        return response()->json(["fonctions"=> $fonctions]);
    }


    /**
     * Create menu
     * @param Request $request
    */
    public function createMenu(Request $request){
        $rules = [
            "libelle" => "required|string"
        ];
        //Valide,gere les exceptions et traite la requete et renvoie à la view le resultat
        return $this->validateAndHandle($request, $rules,  function($data) {
            return Menu::updateOrCreate(["libelle"=>$data["libelle"]],$data);
        });
    }

    /**
     * Get all menus
     * @return mixed
    */
    public function getAllMenus(){
        $menus = Menu::where("status", "actif")->get();
        return response()->json(["menus" => $menus]);
    }

    /**
     * create User
     * @param Request $request
    */
    public function createUser(Request $request){
        $rules = [
            "name" => "required|string",
            "email" => "required|email|unique:users,email",
            "phone" => "required|string|unique:users,phone",
            "password"=>"required|string",
            "matricule" => "required|string|unique:users,matricule",
            "role_id" => "required|int|exists:roles,id"
        ];
        return $this->validateAndHandle($request, $rules, function ($data) {
            $data['password'] = bcrypt($data['password']);
            return User::create($data);
        });
    }

      /**
     * Create habilitation
     * @param Request $request
    */
    public function createHabilitation(Request $request){
        $rules = [
            "libelle" => "required|string",
            "user_id" =>"required|int|exists:users,id",
            "menu_id"=>"required|int|exists:menus,id"
        ];
        //Valide,gere les exceptions et traite la requete et renvoie à la view le resultat
        return $this->validateAndHandle($request, $rules,  function($data) {
            return Habilitation::create($data);
        });
    }


    /**
     * Get All Habilitations
     * @return mixed
    */
    public function createAllHabilitations(){
        $habilitations = Habilitation::where("status", "actif")->get();
        return response()->json([
            "habilitations" => $habilitations
        ]);
    }

    /**
     * Get all Users
     * @return mixed
    */
    public function getAllUsers(){
        $users = User::whereNot("status", "deleted")->get();
        return response()->json(["users" => $users]);
    }


    /**
     * Get all Users
     * @return mixed
    */
    public function getAllCollaborateurs(){
        $users = User::with("role")
            ->with("missions")
            ->whereNot("status", "deleted")
            ->whereNot('role_id',1)
            ->get();
        return response()->json(["collaborateurs" => $users]);
    }

    /**
     * Create Role
     * @param Request $request
    */
    public function createRole(Request $request){
        $rules = [
            "libelle" => "required|string"
        ];
        //Valide,gere les exceptions et traite la requete et renvoie à la view le resultat
        return $this->validateAndHandle($request, $rules,  function($data) {
            return Role::updateOrCreate(["libelle"=>$data["libelle"]],$data);
        });
    }


     /**
     * Get all Roles
     * @return mixed
    */
    public function getAllRoles(){
        $roles = Role::where("status", "actif")->get();
        return response()->json(["roles" => $roles]);
    }
      /**
     * Create Nature job
     * @param Request $request
    */
    public function createNatureJob(Request $request){
        $rules = [
            "libelle" => "required|string",
            "description"=>"nullable|string",
            "user_id"=>"required|int",
        ];
        $request->merge(['user_id' => Auth::id()]);
         return $this->validateAndHandle($request, $rules, function ($data) {
            return NatureJob::create($data);
        });
    }
    /**
     * Get all Nature Job
     * @return mixed
    */
    public function getAllNatureJob(){
        $natureJobs = NatureJob::where("status", "actif")->get();
        return response()->json(["nature_jobs"=>$natureJobs]);
    }
    /**
     * Create Nature Acteur
     * @param Request $request
    */
    public function createNatureActeur(Request $request){
        $rules = [
            "type_acteur"=>"required|string",
            "libelle"=>"required|string",
            "user_id"=>"required|int"
        ];
        $request->merge(['user_id' => Auth::id()]);
         return $this->validateAndHandle($request, $rules, function ($data) {
            return NatureActeur::create($data);
        });
    }


    /**
     * Get all Nature Acteur
     * @return mixed
    */
    public function getAllNatureActeurs(){
        $natureActeurs = NatureActeur::where("status", "actif")->get();
        return response()->json(["nature_acteurs"=>$natureActeurs]);
    }


    /**
     * Create Phase
     * @param Request $request
    */
    public function createPhase(Request $request){
        $rules = [
            "libelle"=>"required|string",
            "detail"=>"required|string",
            "job_id"=>"required|int"
        ];
        return $this->validateAndHandle($request, $rules, function ($data) {
            return Phase::create($data);
        });
    }

    /**
     * Get all Phases
     * @return mixed
    */
    public function getAllPhases(){
        $phases = Phase::with("job")-> where("status", "actif")->get();
        return response()->json(["phases" => $phases]);
    }

    /**
     * create Port
     * @param Request $request
     * @return mixed
    */
    public function createPort(Request $request){
        $rules = [
            "libelle"=>"required|string",
        ];
        return $this->validateAndHandle($request, $rules, function ($data) {
            return Phase::updateOrCreate(["libelle"=>$data["libelle"]],$data);
        });
    }

    /**
     * Get All ports
     * @return mixed
    */
    public function getAllPorts(){
        $ports = Port::where("status", "actif")->get();
        return response()->json(["ports" => $ports]);
    }

     /**
     * create Port Destination
     * @param Request $request
     * @return mixed
    */
    public function createPortDestination(Request $request){
        $rules = [
            "nom"=>"required|string",
        ];
        $request->merge(['user_id' => Auth::id()]);
        return $this->validateAndHandle($request, $rules, function ($data) {
            return PortDestination::create($data);
        });
    }


    /**
     * Get all port destination
     * @return mixed
    */
    public function getAllPortDestinations(){
        $portDestinations = PortDestination::where("status", "actif")->get();
        return response()->json(["port_destinations"=>$portDestinations]);
    }


     /**
     * create Fournisseur
     * @param Request $request
     * @return mixed
    */
    public function createFournisseur(Request $request){
        $rules = [
            "nom"=>"required|string",
        ];
        $request->merge(['user_id' => Auth::id()]);
        return $this->validateAndHandle($request, $rules, function ($data) {
            return Fournisseur::updateOrCreate(["nom"=>$data["nom"]],$data);
        });
    }

    /**
     * Get All fournisseur
     * @return mixed
    */
    public function getAllFournisseurs(){
        $fournisseurs = Fournisseur::where("status", "actif")->get();
        return response()->json(["fournisseurs"=>$fournisseurs]);
    }

    /**
     * Create Log File
     * @param Request $request
     * @return mixed
    */
    public function createLogFile(Request $request){
        $rules = [
            'time_in' => 'nullable|date_format:H:i:s',
            'time_out' => 'nullable|date_format:H:i:s',
            'user_id' => 'required|int',
        ];
        $request->merge(['user_id' => Auth::id()]);
        return $this->validateAndHandle($request, $rules, function ($data) {
            return LogFile::create($data);
        });
    }

    /**
     * Get All log Files
     * @return mixed
    */
    public function getAllLogFiles(){
        $logFiles = LogFile::orderByDesc("id")->get();
        return response()->json([
            "log_files" => $logFiles
        ]);
    }

    /**
     * create Transporteur
     * @param Request $request
     * @return mixed
    */

    public function createTransporteur(Request $request){
        $rules = [
            'nom' => 'required|string',
            'user_id' => 'required|int',
        ];
        $request->merge(['user_id' => Auth::id()]);
        return $this->validateAndHandle($request, $rules, function ($data) {
            return Transporteur::create($data);
        });
    }


    /**
     * Get All Transporteur
     * @return mixed
    */
    public function getAllTransporteurs(){
        $transporteurs = Transporteur::where("status", "actif")->get();
        return response()->json(["transporteurs"=>$transporteurs]);
    }


    /**
     * create Site
     * @param Request $request
     * @return mixed
    */
    public function createSite(Request $request){
        $rules = [
            'libelle' => 'required|string|unique:sites,libelle',
            'ville_id' => 'required|int',
        ];
        return $this->validateAndHandle($request, $rules, function ($data) {
            return Site::create($data);
        });
    }

    /**
     * Get All Site
     * @return mixed
    */
    public function getAllSites(){
        $sites = Site::where("status", "actif")->get();
        return response()->json(["sites" => $sites]);
    }

    /**
     * create Job
     * @param Request $request
     * @return mixed
    */
    public function createJob(Request $request){
        $rules = [
            'libelle' => 'required|string',
            'user_id' => 'required|int',
            'nature_job_id' => 'required|int',
            "description"=>"nullable|string",
        ];
        $request->merge(['user_id' => Auth::id()]);
        return $this->validateAndHandle($request, $rules, function ($data) {
            return Job::updateOrCreate(["libelle"=>$data["libelle"]],$data);
        });
    }

    /**
     * get All job
     * @return mixed
    */
    public function getAllJobs(){
        $jobs = Job::with("nature_job")->with("phases")->orderByDesc('id')->get();
        return response()->json([
            "jobs"=>$jobs
        ]);
    }

    /**
     * create Client
     * @param Request $request
     * @return mixed
    */
    public function createClient(Request $request){
        $rules = [
            'nom' => 'required|string',
            'user_id' => 'required|int',
        ];
        $request->merge(['user_id' => Auth::id()]);
        return $this->validateAndHandle($request, $rules, function ($data) {
            return Client::create($data);
        });
    }

    /**
     * get All clients
     * @return mixed
    */
    public function getAllClients(){
        $clients= Client::where("status", "actif")->get();
        return response()->json([
            "clients"=>$clients
        ]);
    }


      /**
     * create Moyen expedition
     * @param Request $request
     * @return mixed
    */
    public function createMoyenExpedition(Request $request){
        $rules = [
            'nom' => 'required|string',
            'user_id' => 'required|int',
        ];
        $request->merge(['user_id' => Auth::id()]);
        return $this->validateAndHandle($request, $rules, function ($data) {
            return MoyenExpedition::create($data);
        });
    }


     /**
     * get All moyens expeditions
     * @return mixed
    */
    public function getAllMoyenExpeditions(){
        $moyenExpeditions= MoyenExpedition::where("status", "actif")->get();
        return response()->json([
            "moyen_expeditions"=>$moyenExpeditions
        ]);
    }

}
