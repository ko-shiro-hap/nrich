<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(CirclesTableSeeder::class);
        $this->call(AdministratorsTableSeeder::class);
        $this->call(UniversitiesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoryCircleTableSeeder::class);
        $this->call(CampusesTableSeeder::class);
        $this->call(CampusCircleTableSeeder::class);
        $this->call(CharacteristicsTableSeeder::class);
        $this->call(CharacteristicCircleTableSeeder::class);
    }
}