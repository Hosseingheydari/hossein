<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable=['name','phone_number','account_number','user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function food()

    {
        return $this->hasMany(Food::class);
    }

}


