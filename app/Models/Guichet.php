<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guichet extends Model
{

    protected $table = 'guichet';
    public $timestamps = true;
    protected $fillable = array('libelle','description','agenceregional_id');
    protected $visible = array('libelle');

}
