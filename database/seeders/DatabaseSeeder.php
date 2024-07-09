<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seeder uses the model facorty to generate the data.
     */
    public function run(): void
    {
        // This creates 10 new users
        // User::factory(10)->create();

        // This wil create a single user
        User::factory()->create([
            'firstName' => 'Harun',
            'lastName' => 'Bekri',
            'email' => 'harunbekri6@gmail.com',
        ]);

        $this->call(jobseeder::class);
    }
}
