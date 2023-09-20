<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Company;
use App\Models\Employee;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
        ]);

        // Role::factory()->create([
        //     "name" => "User",
        // ]);
        // Role::factory()->create([
        //     "name" => "Manager",
        // ]);
        // Role::factory()->create([
        //     "name" => "Admin",
        // ]);

        // Company::factory()->create([
        //     "name" => "akmhIT company LMT",
        //     "email" => "akmh@gmail.com",
        //     // "photo" => "akmh.jpg",
        //     "website" => "akmh@gmail.com",
        // ]);

        // Employee::factory()->count(5)->create([
        //     "full_name" => "akmh",
        //     "companyID" => rand(1,3),
        //     "email" => "aung@gmail.com",
        //     "phone" => "0999999",
        // ]);
    }
}
