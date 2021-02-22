<?php

namespace app/model;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{

    protected $table = 'user';
    public $timestamps = true;
    protected $fillable = array('nomprenom', 'datenaissance', 'situationmatri', 'lieuxnaissance', 'Niveauetude', 'grade_id', 'villeresidence', 'suphierachique', 'datepriseservice', 'nbrenfant', 'agenceregional_id', 'diplome', 'poste', 'direction_id', 'email', 'password', 'contact', 'service_id', 'sous-direction_id');
    protected $visible = array('idpersonne', 'nomprenom', 'datenaissance', 'situationmatri', 'lieuxnaissance', 'Niveauetude', 'grade_id', 'villeresidence', 'suphierachique', 'datepriseservice', 'nbrenfant', 'agenceregional_id', 'diplome', 'poste', 'direction_id', 'email', 'password', 'contact', 'service_id', 'sous-direction_id');

}