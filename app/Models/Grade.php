<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{

    protected $table = 'grade';
    public $timestamps = true;
    protected $fillable = array('libelle');
    protected $visible = array('libelle');

}
