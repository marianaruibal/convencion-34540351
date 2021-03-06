<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasRoles;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'top_message',
        'title_job',
        'email',
        'password',
        'image',
        'tel',
        'address',
        'about_description',
        'about_title',
        'about_image',
        'about_cv',
        'whatido_title'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function skill()
    {
        return $this->hasMany(Skill::class, 'user_id', 'id');
    }

    public function education()
    {
        return $this->hasMany(Education::class, 'user_id', 'id');
    }

    public function whatido()
    {
        return $this->hasMany(Whatido::class, 'user_id', 'id');
    }

    public function professionalskill()
    {
        return $this->hasMany(ProfessionalSkill::class, 'user_id', 'id');
    }

    public function featureproyect()
    {
        return $this->hasMany(FeaturedProyect::class, 'user_id', 'id');
    }

    public function workexperience()
    {
        return $this->hasMany(WorkExperience::class, 'user_id', 'id');
    }

    public function featuredpost()
    {
        return $this->hasMany(FeaturedPost::class, 'user_id', 'id');
    }

    public function socialmedia()
    {
        return $this->hasMany(SocialMedia::class, 'user_id', 'id');
    }

    public function aboutme()
    {
        return $this->hasMany(AboutMe::class, 'user_id', 'id');
    }

    public function getGetImageAttribute($key)
    {
        if($this->image){
            return url("storage/$this->image");
        }
    }
    public function getUppercaseAttribute($key)
    {
        return strtoupper($this->name);
    }

}
