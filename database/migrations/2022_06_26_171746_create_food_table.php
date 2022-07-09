<?php

use App\Models\CategoreyFood;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('food_name');
            $table->string('primary_img')->nullable();
            $table->string('description')->nullable();
            $table->string('weight')->nullable();
            $table->integer('price');
            $table->softDeletes();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(CategoreyFood::class)->nullable();
            $table->foreignIdFor(Order::class)->nullable();

               });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food');
    }
};
