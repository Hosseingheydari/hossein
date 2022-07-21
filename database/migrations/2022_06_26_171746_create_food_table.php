<?php

use App\Models\Offer;
use App\Models\Restaurant;
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
            $table->integer('price');
            $table->foreignIdFor(Restaurant::class);
            $table->string('primary_img')->nullable();
            $table->string('description')->nullable();
            $table->string('weight')->nullable();
            $table->softDeletes();
            $table->integer('offer_price')->nullable();
            $table->integer('offer_percentage')->nullable();
            $table->foreignIdFor(Offer::class)->nullable();
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
