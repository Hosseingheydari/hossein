<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Food extends Model
{

    use HasFactory;
    // protected $table = 'food';
    protected $fillable = ['food_name','primary_img','decription','weight','price','order_id','restaurant_id','offer_id'];
    // thats false
    

    public function order()
    {
        return $this->hasOne(Order::class);
    }

    // public function categorey()
    // {
    //     return $this->belongsTo(CategoreyFood::class,'categorey_food_id');
    // }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class,'restaurant_id');
    }

    public function image()
     {
        return filter_var($this->primary_img,FILTER_VALIDATE_URL)  ?   $this->primary_img  :  Storage::url($this->primary_img) ;
     }

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}
