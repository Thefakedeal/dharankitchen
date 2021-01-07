<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_code')->unique();
            $table->foreignId('room_type_id');
            $table->integer('beds');
            $table->boolean('ac')->default(FALSE);
            $table->boolean('fridge')->default(FALSE);
            $table->boolean('pickup')->default(FALSE);
            $table->boolean('wardrobe')->default(FALSE);
            $table->boolean('sofa')->default(FALSE);
            $table->boolean('tv')->default(FALSE);
            $table->boolean('hot_cold_shower')->default(FALSE);
            $table->boolean('wifi')->default(FALSE);
            $table->boolean('bottled_water')->default(FALSE);
            $table->boolean('offer')->default(FALSE);
            $table->integer('price');
            $table->integer('discount')->default(0);
            $table->text('description')->nullable();
            $table->integer('room_charge');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
