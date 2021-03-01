<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
        'name'=>'jr',
        'email'=>'chavi95@gmail.com',
        'password'=>Hash::make('azerty45')
        ]);
    }
}
