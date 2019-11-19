<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->date('booking_date');
            $table->time('booking_time')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('hcp_id');
            $table->unsignedBigInteger('consultation_id');
            $table->integer('session_id');
            $table->string('status');
            $table->integer('booking_total');
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
        Schema::drop('bookings');
    }
}
