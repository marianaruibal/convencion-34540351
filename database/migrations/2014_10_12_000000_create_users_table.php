<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->nullable();
            $table->string('top_message')->nullable();
            $table->string('image')->nullable();
            $table->string('title_job')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('tel')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->text('excerpt')->nullable();
            $table->tinyText('about_description')->nullable();
            $table->string('about_title')->nullable();
            $table->string('about_image')->nullable();
            $table->string('about_cv')->nullable();
            $table->string('whatido_title')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
