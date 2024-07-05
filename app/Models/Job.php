<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    use HasFactory;


     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jobs';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'libelle',
        'user_id',
        'nature_job_id',
        'description',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at'=>'datetime:d/m/Y H:i',
        'updated_at'=>'datetime:d/m/Y H:i',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * Summary of user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user():BelongsTo{
        return $this->belongsTo(User::class, foreignKey:'user_id');
    }


    /**
     * Summary of nature_job
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nature_job():BelongsTo{
        return $this->belongsTo(NatureJob::class, foreignKey:'nature_job_id');
    }

    /**
     * Summary of phases
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function phases(): HasMany
    {
        return $this->hasMany(Phase::class, foreignKey:'job_id', localKey:'id');
    }


}