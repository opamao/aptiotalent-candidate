<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Projects extends Model
{
    use HasFactory, Notifiable;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'titre_projet',
        'role_projet',
        'lien_projet',
        'sur_projet',
        'debut_projet',
        'fin_projet',
        'description_projet',
        'candidat_id',
    ];

    protected $table = 'projects';

    protected $primaryKey = 'idproj';
}
