<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Demande extends Model 
{

    protected $table = 'demande';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('fonctionIterim', 'datedebut', 'datefin', 'dureeconge', 'datereprise', 'statu_id');
    protected $visible = array('fonctionIterim', 'datedebut', 'datefin', 'dureeconge', 'datereprise', 'statu_id');

}