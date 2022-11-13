<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 20; $i++)
        {
            Category::create([
                'name'        => $faker->firstName,
                'description' => $faker->text,
                'image'       => 'category-images/1.jpg',
                'status'      => 1,

            ]);
        }

    }
}
