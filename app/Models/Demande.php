<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Demande extends Model
{
    use HasFactory;
    protected $table = 'demande';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('fonctionIterim', 'datedebut', 'datefin', 'dureeconge', 'datereprise');
    protected $visible = array('fonctionIterim', 'datedebut', 'datefin', 'dureeconge', 'datereprise');

}
