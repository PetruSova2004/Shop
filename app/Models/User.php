<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'google_id',
        'name',
        'email',
        'password',
        'age',
        'address',
        'gender',
        'is_admin'
    ];

    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;


    const ROLE_USER = 0;
    const ROLE_ADMIN = 1;


    protected $table = 'users';
    protected $guarded = false;

    static function getGenders()
    {
        return [
            self::GENDER_MALE => 'Мужской',
            self::GENDER_FEMALE => 'Женский',
        ];
    }

    static function getRoles()
    {
        return [
            self::ROLE_USER => 'Пользователь',
            self::ROLE_ADMIN => 'Админ',
        ];
    }

    public function getGenderTitleAttribute()
    {
        return self::getGenders()[$this->gender];
    }

    public function getRoleTitleAttribute()
    {
        return self::getRoles()[$this->is_admin];
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cart()
    {
        return $this->belongsToMany(Product::class, 'carts');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
