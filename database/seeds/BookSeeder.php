<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = \Illuminate\Support\Carbon::now();

        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            $s = $faker->catchPhrase;
            $a_name = $faker->name;

            DB::table("books")->insert([
                'category_id' => $faker->numberBetween(1, 10),
                'book_name' => $s,
                'book_image' => 'https://picsum.photos/seed/' . $faker->numberBetween(1, 50) . '/320/490',
                'description' => $faker->paragraph(20, false),
                'author_name' => $a_name,
                'publisher' => $faker->company,
                'pages' => $faker->numberBetween(95, 999),
                'isbn' => $faker->isbn13,
                'slug' => Str::slug($s, '-'),
                'user_id' => 1,
                'author_name_slug' => Str::slug($a_name, '-'),
                'created_at' => $date,
                'updated_at' => $date
            ]);
        }
    }
}
