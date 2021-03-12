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
    protected $fillable = array('fonctionIterim', 'datedebutca', 'datefinca', 'dureeconge', 'datereprise', 'statu', 'nomiterim', 'objetabsence', 'datedepart', 'dureeabsence');
    protected $visible = array('fonctionIterim', 'datedebutca', 'datefinca', 'dureeconge', 'datereprise', 'statu', 'nomiterim', 'objetabsence', 'datedepart', 'dureeabsence');

}