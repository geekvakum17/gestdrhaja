<?php

namespace app/model;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model 
{

    protected $table = 'direction';
    public $timestamps = true;
    protected $fillable = array('libelle');
    protected $visible = array('libelle');

}