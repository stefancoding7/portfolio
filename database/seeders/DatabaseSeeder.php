<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('settings')->insert([
            'id' => 1,
            'site_switch' => true,
            'short_info' => "<h1>Hi, I'm Stefan</h1>
            <h5>Full-stack developer</h5>
            <p>
              I design and code beautifully simple things, and I love what I do.
            </p>"
        ]);

        DB::table('seos')->insert([
            'id' => 1,
            'basic_title' => 'My site',
        ]);

        DB::table('stats')->insert([
            'id' => 1,
            'visitors' => 0,
        ]);


        
    }
}
