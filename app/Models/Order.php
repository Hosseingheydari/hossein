<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable =['total','user_id'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function foods()
    {
        return $this->hasMany(Food::class);
    }

}
