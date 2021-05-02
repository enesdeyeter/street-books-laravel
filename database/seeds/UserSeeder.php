<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = \Illuminate\Support\Carbon::now();

        DB::table("users")->insert([
            [
                'name' => 'Super Admin',
                'email' => 'admin@mail.com',
                'password' => '$2y$10$sAaReJY6qT0TSBPqzLbLvOW7SFMqQClMzMVfoeaB1rdldmTvBjYJW', //12345678
                'created_at' => $date,
                'updated_at' => $date,
            ]
        ]);
    }
}
