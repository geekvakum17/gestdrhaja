<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model 
{

    protected $table = 'absence';
    public $timestamps = true;
    protected $fillable = array('nomiterim', 'objetabsence', 'dateretour', 'nbrejourouvrable', 'statu');
    protected $visible = array('nomiterim', 'objetabsence', 'dateretour', 'nbrejourouvrable', 'statu');


}