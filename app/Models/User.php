<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Post;
use App\Models\CategoreyFood;

class User extends Authenticatable
{
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;


    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',

    ];

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
    public function post()
    {
        return $this->hasMany(Post::class)->latest();
    }
    // user should not have any food
    // public function food()
    // {
    //     return $this->hasMany(Food::class);
    // }

    public function Restaurants()
    {
        return $this->hasMany(CategoreyRestaurant::class);
    }
    // thats false
    // public function categoreyFoods()
    // {
    //     return $this->hasMany(CategoreyFood::class);
    // }
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function toCategoreyFood()
    {
        return $this->hasManyThrough(CategoreyFood::class,CategoreyRestaurant::class);
    }
    public function tofood()

    {
        return $this->hasManyDeep(Food::class ,[CategoreyRestaurant::class ,CategoreyFood::class]);
    }


}
