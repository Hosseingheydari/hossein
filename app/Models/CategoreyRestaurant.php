<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoreyRestaurant extends Model
{
    use HasFactory;
   
    protected $fillable=['cat_restaurant' ,'id','account_number','phone_number','name','user_id'] ;

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function categoreyFood()
    {
        return $this->hasMany(CategoreyFood::class) ;
    }

}
