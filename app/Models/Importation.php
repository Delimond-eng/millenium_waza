<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Importation extends Model
{
    use HasFactory;


           /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'importations';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nif',
        'position_tarifaire',
        'cotation',
        'fob',
        'fret',
        'num_bl_lta',
        'port_destination_id',
        'date_arrivee',
        'numero_av',
        'nombre_colis',
        'nature_marchandise',
        'poids_kg',
        'lieu_livraison',
        'date_livraison',
        'status',
        'observation',
        'user_id',
        'fournisseur_id',
        'transporteur_id',
        'moyen_expodition_id',
        'client_id',
        'exportation_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date_arrivee' => 'datetime:d/m/Y H:i',
        'date_livraison' => 'datetime:d/m/Y H:i',
        'created_at' => 'datetime:d/m/Y H:i',
        'updated_at' => 'datetime:d/m/Y H:i',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'date_arrivee',
        'date_livraison',
    ];


    /**
     * Get the user that owns the exportation.
     */
    public function user()
    {
        return $this->belongsTo(User::class, foreignKey:'user_id');
    }

    /**
     * Get the fournisseur that owns the exportation.
     */
    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class, foreignKey:'fournisseur_id');
    }

    /**
     * Get the transporteur that owns the exportation.
     */
    public function transporteur()
    {
        return $this->belongsTo(Transporteur::class, foreignKey:'transporteur_id');
    }

    /**
     * Get the moyenExpodition that owns the exportation.
     */
    public function moyenExpodition()
    {
        return $this->belongsTo(MoyenExpedition::class, foreignKey:'moyen_expedition_id');
    }

    /**
     * Get the client that owns the exportation.
     */
    public function client()
    {
        return $this->belongsTo(Client::class, foreignKey:'client_id');
    }

    /**
     * Get the parent exportation that owns the exportation.
     */
    public function exportation()
    {
        return $this->belongsTo(Exportation::class, 'exportation_id');
    }
}