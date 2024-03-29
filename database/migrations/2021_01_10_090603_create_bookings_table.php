<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->date('checkin');
            $table->date('checkout');
            $table->string('guests')->default(1);
            $table->foreignId('room_type_id');
            $table->integer('totalroom')->default(1);
            $table->string('mobile');
            $table->integer('total');
            $table->boolean('confirmed')->default(FALSE);
            $table->boolean('paid')->default(FALSE);
            $table->boolean('cancelled')->default(FALSE);
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
        Schema::dropIfExists('bookings');
    }
}
