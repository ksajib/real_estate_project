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
        DB::table('rs_users')->insert([
            'unique_id' => str_random(10),
            'name' => 'sajib mridha',
            'email' => 'sajib@gmail.com',
            'username' => 'sajib_mridha',
            'password' => bcrypt('123'),
            'role' => 1,
        ]);

        DB::table('rs_user_profile')->insert([
            'user_id' => 1,
            'status' => 1
        ]);
    }
}
