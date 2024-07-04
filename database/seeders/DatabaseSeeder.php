<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Gaston delimond',
                'email' => 'gastondelimond@gmail.com',
                'password' => bcrypt('12345'),
                'phone' => '+243815468899',
                'matricule' => '38EIEHJ',
                'role_id' => 1
            ],
            [
                'name' => 'Lionnel Nawej',
                'email' => 'lionnelnawej@gmail.com',
                'password' => bcrypt('12345'),
                'phone' => '+243815468873',
                'matricule' => '38EIEH8',
                'role_id' => 1
            ]
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}