<?php

namespace app/model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model 
{

    protected $table = 'service';
    public $timestamps = true;
    protected $fillable = array('libelle', 'lieuservice', 'descriptionservice');
    protected $visible = array('libelle', 'lieuservice', 'descriptionservice');

}