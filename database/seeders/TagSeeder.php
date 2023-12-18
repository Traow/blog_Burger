<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tag::factory(1)->create([
            'name' => "🌶️",
        ]);
    
        tag::factory(1)->create([
            'name' => "🌶️🌶️",
        ]);

        tag::factory(1)->create([
            'name' => "🌶️🌶️🌶️",
        ]);

        tag::factory(1)->create([
            'name' => "Taimne",
        ]);

        tag::factory(1)->create([
            'name' => "Gluteeni vaba",
        ]);
    
    }
}


