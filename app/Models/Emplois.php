<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Emplois extends Model
{
    use HasFactory, Notifiable;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'entreprise_actuelle',
        'experience_an',
        'experience_mois',
        'nom_entreprise',
        'date_entree',
        'salaire_annuel',
        'preavis',
        'titre_poste',
        'typeemploi_id',
        'candidat_id',
    ];

    protected $table = 'emplois';

    protected $primaryKey = 'idemp';
}
