<?php

namespace Database\Seeders;

use App\Models\Candidats;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Candidats::factory()->create([
            'nom_cand' => 'Test User',
            'prenom_cand' => 'Test User',
            'email_cand' => 'test@example.com',
            'phone_cand' => 'test@example.com',
            'habitation_cand' => 'Marcory',
            'experience_an_cand' => '2025',
            'experience_mois_cand' => '5',
            'salaire_cand' => '0',
        ]);
    }
}
