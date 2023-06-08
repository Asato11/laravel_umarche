<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'asa',
            'email' => 'test@admin.com',
            'password' => Hash::make('password123'),
            'created_at' => '2023/05/28 11:11:11'
            
        ]);
    }
}
