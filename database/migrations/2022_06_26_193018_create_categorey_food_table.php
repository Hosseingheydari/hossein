<?php

use App\Models\CategoreyRestaurant;
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
        Schema::create('categorey_food', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->foreignIdFor(CategoreyRestaurant::class);
            $table->string('cat_food');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat');
    }
};
