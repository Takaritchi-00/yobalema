<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property $id
 * @property $nom
 * @property $prenom
 * @property $numero
 * @property $created_at
 * @property $updated_at
 *
 * @property Location[] $locations
 * @property Note[] $notes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Client extends Model
{
    
    static $rules = [
		'nom' => 'required',
		'prenom' => 'required',
		'numero' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom','prenom','numero'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function locations()
    {
        return $this->hasMany('App\Models\Location', 'client_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notes()
    {
        return $this->hasMany('App\Models\Note', 'client_id', 'id');
    }
    

}
