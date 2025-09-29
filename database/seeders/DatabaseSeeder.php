<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Character; // ⚡️ important : importer ton modèle
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*
        // Création d'un personnage
        $character = new Character();
        $character->name = 'Goku';
        $character->picture = '';
        $character->save();*/

        // Exemple d’utilisateur
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
