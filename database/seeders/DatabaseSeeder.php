<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\prodi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    prodi::create(
        [
            'name' => 'Tehnik Informatika'
        ]
    );

     prodi::create(
        [
            'name' => 'Manajemen Informatika'
        ]
    );

    prodi::create(
        [
            'name' => 'Sistem Informasi'
        ]
    );
    }

   
    
}
