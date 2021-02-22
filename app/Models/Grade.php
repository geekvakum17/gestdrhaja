<?php

namespace app/model;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model 
{

    protected $table = 'grade';
    public $timestamps = true;
    protected $fillable = array('libelle');
    protected $visible = array('libelle');

}