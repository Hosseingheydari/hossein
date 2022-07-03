<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoreyFood extends Model
{
    use HasFactory;
    protected $fillable = ['cat_food','user_id'];
    public function user()
    {
        return $this->hasOne(User::class);
    }

}
