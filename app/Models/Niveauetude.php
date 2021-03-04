<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveauetude extends Model
{
    use HasFactory;
    protected $table = 'niveauetudes';
    public $timestamps = true;
    protected $fillable = array('libelle');
    protected $visible = array('libelle');
}
