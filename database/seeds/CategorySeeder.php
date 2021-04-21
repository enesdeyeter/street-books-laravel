<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
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

        for ($i=1; $i<=20; $i++){

            DB::table("categories")->insert([
                'name'=>'kategori '.$i,
                'slug'=>'kategori-'.$i,
                'created_at'=>$date,
                'updated_at'=>$date
            ]);
        }
    }
}
