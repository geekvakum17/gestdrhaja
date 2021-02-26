<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{

    protected $table = 'direction';
    public $timestamps = true;
    protected $fillable = array('libelle','description');
    protected $visible = array('libelle');

}
