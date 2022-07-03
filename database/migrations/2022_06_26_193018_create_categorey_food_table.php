<?php

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
            $table->id();
            $table->timestamps();
            $table->enum('cat_food',['chelokabab','sokhari','berger','pitza','sandwich','pasta','salad','jojekabab','chelogosht']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorey_food');
    }
};
