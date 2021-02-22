<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenceregional extends Model
{

    protected $table = 'agenceregional';
    public $timestamps = true;
    protected $fillable = array('libelle');
    protected $visible = array('libelle');

}
