<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::factory()->count(100)->create();
        // DB::table('users')->insert([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'phone' =>  '08767899876',
        //     'address' => 'afhaf',
        //     'birth_date' => '02-02-2000',
        //     'password' => bcrypt('password'),
        //     'role' =>'admin',
        // ]);
        DB::table('users')->insert([
            'name' => 'tidakpenting',
            'email' => 'tidakpenting@gmail.com',
            'phone' =>  '08767899876',
            'address' => 'afhaf',
            'birth_date' => '02-02-2000',
            'password' => bcrypt('tidakpenting'),
            'role' =>'pelanggan',
        ]);
    }
}
