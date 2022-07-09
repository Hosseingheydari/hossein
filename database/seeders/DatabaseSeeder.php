<?php

namespace Database\Seeders;

use App\Models\CategoreyFood;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CategoreyFoodSeeder ;
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

        // \App\Models\User::create([
        //     'name' => 'hossein',
        //     'email' => 'h.gheydarii@yahoo.com',
        //     'password'=>bcrypt('12345678'),
        //     'role'=>'admin',
        // ]);
        \App\Models\CategoreyFood::create([

            'cat_food'=>'pitza',
        ]);
    // $this->call([CategoreyFoodSeeder::class]);
    // \App\Models\User::factory()->haspost([

    //     'title'=>"greeeting",
    //     'content'=>"hello how are ",
    //     'slug'=>"this is slug",
    //     'status'=>'draft',
    // ])->create();

    // \App\Models\Post::factory()->create([
    //     'user_id' => 1,
    // ]);
    // User::factory()->count(2)->has(Post::factory()->count(3))->create();

}
}
