<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Food extends Model
{

    use HasFactory;
    // protected $table = 'food';
    protected $fillable = ['food_name','primary_img','decription','weight','price','order_id','categorey_food_id',];
    // thats false
    // public function user()
    // {
    //     return $this->belongsTo(User::class,'user_id');
    // }


    public function order()
    {
        return $this->hasOne(Order::class);
    }

    public function categorey()
    {
        return $this->belongsTo(CategoreyFood::class,'categorey_food_id','');
    }
}
