<?php

namespace Database\Seeders;

use App\Models\CategoreyFood;
use App\Models\CategoreyRestaurant;
use App\Models\Food;
use App\Models\Post;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Post::create([
        //     'title'=>"greeeting",
        //     'content'=>"hello how are ",
        //     'slug'=>"this is slug",
        //     'status'=>"admin",
        //     'user_id'=>1

        // ]);

        // \App\Models\Post::factory(3)->create(['user_id']);



        // \App\Models\CategoreyRestaurant::create([

        //     'cat_restaurant' =>'fastfood',
        //     'acount_number'=> '55' ,
        //     'phone_number'=> '0551',
        //     'name'=> 'hayda',
        //     'user_id' => 1
        // ]);
        //-----------categorafood------------
        //   \App\Models\CategoreyFood::create([

        //     'cat_food'=>'pitza',
        //     'categorey_restaurant_id'=> '1'
        // ]);
    // \App\Models\User::factory()->haspost([

    //     'title'=>"greeeting",
    //     'content'=>"hello how are ",
    //     'slug'=>"this is slug",
    //     'status'=>'draft',
    // ])->create();

    \App\Models\Post::factory(3)->create([
        'user_id' => 2,
    ]);
    // User::factory()->count(2)->has(Post::factory()->count(3))->create();
    //--------------------------------food--------------
    // \App\Models\Food::create([

    //     'food_name'=>"joj",
    //     'price'=>120000,
    //     'categorey_food_id'=>"1"
    // ]);
    // \App\Models\Food::factory()->create([
    //     'categorey_food_id'=>1,
    // ]);
    // \App\Models\User::factory()->count(2)->has(Restaurant::factory()->count(1)->has(Food::factory()->count(3)))->create();

    //mige javab nemide chera??
        // \App\Models\User::factory()->count(4)->has(CategoreyRestaurant::factory()->count(2)->has(CategoreyFood::factory()->count(3))->has(Food::factory()->count(2)))->create([

        //     'categoray_food_id'=>2 ,
        // ]);





}
}
