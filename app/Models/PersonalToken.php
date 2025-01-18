<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PersonalToken extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'tokenable_id',
    ];

    protected $table = 'personal_access_tokens';

    protected $primaryKey = 'id';
}
