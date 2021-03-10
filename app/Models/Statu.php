<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statu extends Model 
{

    protected $table = 'statu';
    public $timestamps = true;
    protected $fillable = array('libelle');
    protected $visible = array('libelle');

}