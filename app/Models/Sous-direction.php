<?php

namespace app/model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sous-direction extends Model 
{

    protected $table = 'sous-direction';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('libelle', 'lieudirection', 'description');
    protected $visible = array('libelle', 'lieudirection', 'description');

}