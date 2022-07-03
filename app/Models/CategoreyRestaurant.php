<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoreyRestaurant extends Model
{
    use HasFactory;
    public  string $user_id  ;
    protected $fillable=['cat_restaurant' , 'user_id' , 'id','account_number','phone_number','name'] ;

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
