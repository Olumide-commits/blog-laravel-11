<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

<<<<<<< HEAD
    protected $fillable = ['name', 'email', 'password', 'role', 'gender', 'age', 'address', 'image', 'username'];

    const GENDER_MALE = 0;
    const GENDER_FEMALE = 1;

    const ROLE_GUEST = 'Guest'; // Change from Guest to 'guest'
    const ROLE_ADMIN = 'Admin'; // Change from Admin to 'admin'

    protected $table = 'users';
    protected $guarded = [];

    public static function getGenders()
=======
    const GENDER_MALE = 0;
    const GENDER_FEMALE = 1;


    protected $table = 'users';
    protected $guarded = false;

    static function getGenders()
>>>>>>> origin/main
    {
        return [
            self::GENDER_MALE => 'Men',
            self::GENDER_FEMALE => 'Women'
        ];
    }

    public function getGenderTitleAttribute()
    {
        return self::getGenders()[$this->gender];
    }

<<<<<<< HEAD
    public static function getRoles(): array
    {
        return [
            self::ROLE_GUEST => 'Guest',
            self::ROLE_ADMIN => 'Admin'
        ];
    }

    public function getRoleTitleAttribute(): string
    {
        return self::getRoles()[$this->role];
    }

=======
>>>>>>> origin/main
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
<<<<<<< HEAD
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
=======
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
>>>>>>> origin/main

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
