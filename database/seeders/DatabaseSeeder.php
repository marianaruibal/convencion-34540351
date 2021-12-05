<?php

namespace Database\Seeders;

use App\Models\AboutMe;
use App\Models\Education;
use App\Models\FeaturedPost;
use App\Models\FeaturedProyect;
use App\Models\ProfessionalSkill;
use App\Models\WorkExperience;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Skill;
use App\Models\SocialMedia;
use App\Models\Whatido;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create()->each(function ($user){
            $user->assignRole('client');
        });
        Skill::factory(25)->create();
        Whatido::factory(25)->create();
        Education::factory(18)->create();
        FeaturedProyect::factory(18)->create();
        ProfessionalSkill::factory(25)->create();
        WorkExperience::factory(25)->create();
        FeaturedPost::factory(25)->create();
    }
}
