<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\ProductFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            SliderSeeder::class,
        ]);

        $this->call([
            CategorySeeder::class,
        ]);

        $this->call([
            AboutSeeder::class,
        ]);

        $this->call([
            SiteSettingSeeder::class,
        ]);

        $this->call([
            ProductSeeder::class,
        ]);

        Product::factory(100)->create();
    }
}
