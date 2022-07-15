<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoreyFood extends Model
{
    use \Znck\Eloquent\Traits\BelongsToThrough;

    use HasFactory;
    protected $table = 'categorey_food';
    protected $fillable = ['cat_food','categorey_restaurant_id'];

    public function food()
    {
        return $this->hasMany(Food::class) ;
    }
    public function categoreyRestaurant()
    {
        return $this->belongsTo(CategoreyRestaurant::class,'categorey_restaurant_id');
    }
    public function toUser()
    {
        return $this->belongsToThrough(User::class,CategoreyRestaurant::class);
    }
    


}
