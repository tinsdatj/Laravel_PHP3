<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ( $i=0;$i<100;$i++ ) {
            DB::table('books')->insert([
                'title' => $faker->text(25),
                'thumbnail' => $faker->text(25),
                'author' => $faker->text(50),
                'publisher' => $faker->text(25),
                'publication' => '2024-10-7',
                'price' => rand(1, 100000),
                'quality' => rand(1,100),
                'category_id' => rand(1, 5),
            ]);
        }
    }
}
