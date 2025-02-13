<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\User;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        // Créer des utilisateurs fictifs
        $user1 = User::create([
            'name' => 'User 1',
            'email' => 'user1@example.com',
            'password' => bcrypt('password'),
        ]);
        
        $user2 = User::create([
            'name' => 'User 2',
            'email' => 'user2@example.com',
            'password' => bcrypt('password'),
        ]);

        // Ajouter des avis pour les randonnées
        Review::create([
            'content' => 'Incredible views at every turn, a truly unforgettable experience!',
            'views' => 200,
            'hike_id' => 1, // Randonnée ID 1 (The Grand Canyon Hike)
            'user_id' => $user1->id,
        ]);

        Review::create([
            'content' => 'Tough but rewarding, the Appalachian Trail offers a real challenge!',
            'views' => 300,
            'hike_id' => 2, // Randonnée ID 2 (Appalachian Trail)
            'user_id' => $user2->id,
        ]);
    }
}
