<?php

namespace app/model;

use Illuminate\Database\Eloquent\Model;

class Agenceregional extends Model 
{

    protected $table = 'agenceregional';
    public $timestamps = true;
    protected $fillable = array('libelle');
    protected $visible = array('libelle');

}