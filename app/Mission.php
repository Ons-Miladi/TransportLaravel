<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'missions';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sujet', 'date_debut', 'date_fin', 'destination', 'nom_accompagnant', 'prenom_accompagnant', 'id_voiture', 'id_chauffeur', 'id_d', 'id_f'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['date_debut', 'date_fin'];
   

}