<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    protected $table = 'eleve';
    protected $primarykey = 'id';
    protected $fillable = [
        'matricule',
        'nom',
        'prenom',
        'dateN',
        'lieuN',
        'genre',
        'cniparent',
        'classe',
        'sante',
        'nationalite',

    ];
}
