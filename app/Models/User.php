<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    use SoftDeletes;

    protected $primaryKey = 'user_id';  // Use 'user_id' as the primary key
    protected $dates = ['deleted_at'];  // Make sure 'deleted_at' is cast as a date

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'fullname',
        'email',
        'age',
        'img',
        'password',
    ];

    protected $attributes = [
        'status' => 'active',
    ];

    // public function posts()
    // {
    //     return $this->hasMany(Community::class);
    // }

    // public function reports()
    // {
    //     return $this->hasMany(Report::class, 'reporter_user_id');
    // }

    // public function reportedBy()
    // {
    //     return $this->hasMany(Report::class, 'reported_user_id');
    // }

    // User Model
    public function Recipes()
    {
        return $this->hasMany(Recipe::class);
    }



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
