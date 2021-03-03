<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = 'users';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'password',
        'nomprenom',
        'datenaissance',
        'situationmatri',
        'lieuxnaissance',
        'Niveauetude',
        'grade_id',
        'villeresidence',
        'suphierachique',
        'datepriseservice',
        'nbrenfant',
        'agenceregional_id',
        'diplome',
        'poste',
        'direction_id',
        'contact',
        'service_id',
        'sousdirection_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
