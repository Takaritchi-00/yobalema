<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehicule
 *
 * @property $id
 * @property $photo
 * @property $type
 * @property $date_achat
 * @property $kilometres
 * @property $matricule
 * @property $status
 * @property $marque
 * @property $suivi_compteur
 * @property $chauffeur_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Chauffeur $chauffeur
 * @property Location[] $locations
 * @property Paiement[] $paiements
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehicule extends Model
{
    
    static $rules = [
        'photo' => 'required',
		'type' => 'required',
		'date_achat' => 'required',
		'kilometres' => 'required',
		'matricule' => 'required|regex:/^[A-Z]{2}-\d{2}-[A-Z]{2}$/',
		'status' => 'required',
		'marque' => 'required',
		'suivi_compteur' => 'required',
		'chauffeur_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['photo','type','date_achat','kilometres','matricule','status','marque','suivi_compteur','chauffeur_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function chauffeur()
    {
        return $this->hasOne('App\Models\Chauffeur', 'id', 'chauffeur_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function locations()
    {
        return $this->hasMany('App\Models\Location', 'vehicule_id', 'id');
    }
    

}
