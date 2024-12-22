<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        // DB::table('users')->insert([
        //     'name' => 'user' . Str::random(3),
        //     'email' => 'email' . Str::random(3).'@teste.com',
        //     'password' => Hash::make('123456'),
        // ]);

        User::factory()->count(50)->create();
        // // ->hasPosts(1)
    }
}
