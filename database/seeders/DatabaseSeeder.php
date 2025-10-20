<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->updateOrInsert(
            ['email' => 'tama.ronal@gmail.com'],
            [
                'nama' => 'ronal',
                'password' => Hash::make('ronaltama'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}