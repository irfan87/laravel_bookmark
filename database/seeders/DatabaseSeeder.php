<?php

namespace Database\Seeders;

use App\Models\Bookmark;
use App\Models\User;
use Illuminate\Database\Seeder;

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
        User::factory()->create([
            'name' => 'Ahmad Irfan',
            'email' => 'irfanshukri203@gmail.com',
            'password' => bcrypt('password'),
        ]);

        Bookmark::factory(10)->create();
    }
}
