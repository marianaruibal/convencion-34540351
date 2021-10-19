<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Skill;
use App\Models\SocialMedia;
use App\Models\WhatIdo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Skill::factory(10)->create();
        SocialMedia::factory(10)->create();
        WhatIdo::factory(10)->create();
    }
}
