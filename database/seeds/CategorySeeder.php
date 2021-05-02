<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        DB::table("categories")->insert([
            [
                'name' => 'Edebiyat',
                'slug' => 'edebiyat',
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => 'Roman',
                'slug' => 'roman',
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => 'Bilim - Kurgu',
                'slug' => 'bilim-kurgu',
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => 'Çocuk ve Gençlik',
                'slug' => 'cocuk-ve-genclik',
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => 'Sanat ve Tasarım',
                'slug' => 'sanat-ve-tasarim',
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => 'Çizgi Roman',
                'slug' => 'cizgi-roman',
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => 'Mizah',
                'slug' => 'mizah',
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => 'Eğitim',
                'slug' => 'egitim',
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => 'Kişisel Gelişim',
                'slug' => 'kisisel-gelisim',
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => 'Araştırma Tarih',
                'slug' => 'arastirma-tarih',
                'created_at' => $date,
                'updated_at' => $date,
            ]

        ]);
    }
}
