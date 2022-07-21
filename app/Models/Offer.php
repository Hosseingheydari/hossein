<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable=['offer_name','offer_percentage'];



    public function food()
    {
        return $this->hasMany(Food::class);
    }
}
