<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Educations extends Model
{
    use HasFactory, Notifiable;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'etudie',
        'nom_etablissement',
        'titre_formation',
        'debut_formation_an',
        'debut_formation_mois',
        'fin_formation_an',
        'fin_formation_mois',
        'candidat_id',
    ];

    protected $table = 'educations';

    protected $primaryKey = 'idedu';
}
