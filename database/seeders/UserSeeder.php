<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::where('name', 'admin')->first();
        $studentRole = Role::where('name', 'student')->first();
        
        $faker = Faker::create();

    
        for ($i = 0; $i < 5; $i++) {
            User::create([
                'name' => $faker->name,  
                'role_id' => $adminRole->id,
            ]);
        }

        for ($i = 0; $i < 5; $i++) {
            User::create([
                'name' => $faker->name, 
                'role_id' => $studentRole->id,
            ]);
        }
    }
}
