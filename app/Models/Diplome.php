<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    use HasFactory;
    protected $table = 'diplome';
    public $timestamps = true;
    protected $fillable = array('libelle', 'description');
    protected $visible = array('libelle', 'description');
}
