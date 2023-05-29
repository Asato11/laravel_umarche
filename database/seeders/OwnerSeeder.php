<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'test1',
                'email' => 'test1@admin.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/05/28 11:11:11'
            ],
            [
                'name' => 'test2',
                'email' => 'test2@admin.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/05/28 11:11:11'
            ],
            [
                'name' => 'test3',
                'email' => 'test3@admin.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/05/28 11:11:11'
            ],
        ]);
    }
}
