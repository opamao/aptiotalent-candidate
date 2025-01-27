<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Candidats extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'photo_cand',
        'sexe_cand',
        'nom_cand',
        'prenom_cand',
        'email_cand',
        'phone_cand',
        'habitation_cand',
        'experience_an_cand',
        'experience_mois_cand',
        'salaire_cand',
        'password_cand',
        'status_cand',
        'otp_cand',
    ];

    protected $hidden = [
        'password_cand',
    ];

    protected $table = 'candidates';

    protected $primaryKey = 'idcandidat';

    protected function casts(): array
    {
        return [
            'password_cand' => 'hashed',
        ];
    }
}
