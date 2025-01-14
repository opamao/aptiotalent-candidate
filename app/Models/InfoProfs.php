<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class InfoProfs extends Model
{
    use HasFactory, Notifiable;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'secteur_info',
        'departement_info',
        'categorie_info',
        'fonction_info',
        'candidat_id',
    ];

    protected $table = 'info_prof';

    protected $primaryKey = 'idinfo';
}
