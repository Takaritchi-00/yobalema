<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;



/**
 * Class Chauffeur
 *
 * @property $id
 * @property $nom
 * @property $prenom
 * @property $email
 * @property $password
 * @property $photo
 * @property $experiences
 * @property $numero_permis
 * @property $date_emission_permis
 * @property $date_expiration_permis
 * @property $categorie
 * @property $contrat
 * @property $created_at
 * @property $updated_at
 *
 * @property Note[] $notes
 * @property Vehicule[] $vehicules
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Chauffeur extends Authenticatable
{
    use  Notifiable, HasFactory;
    static $rules = [
		'nom' => 'required',
		'prenom' => 'required',
        'photo' => 'required',
		'experiences' => 'required',
        'numero_permis' => 'required|numeric|digits:8',
		'date_emission_permis' => 'required',
		'date_expiration_permis' => 'required',
		'categorie' => 'required',
        'contrat' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $guard = 'chauffeur';
    protected $fillable = ['nom','prenom','photo','experiences','numero_permis','date_emission_permis','date_expiration_permis','categorie','contrat'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notes()
    {
        return $this->hasMany('App\Models\Note', 'chauffeur_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehicule()
    {
        return $this->hasOne('App\Models\Vehicule', 'chauffeur_id', 'id');
    }
    

}
