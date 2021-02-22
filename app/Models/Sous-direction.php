<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sousdirection extends Model
{

    protected $table = 'sous-direction';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('libelle', 'lieudirection', 'description');
    protected $visible = array('libelle', 'lieudirection', 'description');

}
