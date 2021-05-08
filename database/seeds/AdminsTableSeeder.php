<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'ah.sabbir@gmail.com',
            'password'=>bcrypt('admin123'),
        ]);
        DB::table('users')->insert([
            'name'=>'user',
            'email'=>'iuahmmmed112370@gmail.com',
            'password'=>bcrypt('user123'),

        ]);
    }
}
