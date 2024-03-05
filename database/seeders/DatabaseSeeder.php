<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listings;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Listings::create(
            [
                'title' => 'Laravel Senior Developer',
                'tags' => 'laravel, javascript',
                'company' => 'Acme Foundation',
                'loaction' => 'Boston, MA',
                'email' => 'acme@example.com',
                'website' => 'http://www.acme.com',
                'description' => 'it is a postion for developers especially interested with the development
                its functionality for laravel development and javascript development',
            ]);

        Listings::create(
            [
                'title' => 'Laravel Junior Developer',
                'tags' => 'laravel, javascript',
                'company' => 'Acme Foundation',
                'loaction' => 'Boston, MA',
                'email' => 'acme@example.com',
                'website' => 'http://www.acme.com',
                'description' => 'it is a postion for developers especially interested with the development
                its functionality for laravel development and javascript development',
            ]
        ); 
           
    }
}
