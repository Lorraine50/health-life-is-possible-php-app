<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('reply_body');
            $table->unsignedBigInteger('comment_id');
            $table->unsignedBigInteger('hcp_id');

            //$table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');
            //$table->foreign('hcp_id')->references('id')->on('hcps')->onDelete('cascade');
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
        Schema::drop('replies');
    }
}
