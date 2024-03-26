<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Location
 *
 * @property $id
 * @property $lieu_d
 * @property $lieu_a
 * @property $date_location
 * @property $heure_debut
 * @property $heure_fin
 * @property $client_id
 * @property $vehicule_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property Vehicule $vehicule
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Location extends Model
{
    
    static $rules = [
		'lieu_d' => 'required',
		'lieu_a' => 'required',
		'date_location' => 'required|date|after_or_equal:today',
        'user_id' => 'required',
		'vehicule_id' => 'required',
        'heure_debut' => 'required|date_format:H:i|before:heure_fin',
        'heure_fin' => 'required|date_format:H:i|after:heure_debut',
        'payer' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['lieu_d','lieu_a','date_location','heure_debut','heure_fin','user_id','vehicule_id','payer'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }

}
