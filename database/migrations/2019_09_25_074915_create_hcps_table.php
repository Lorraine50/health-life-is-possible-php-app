<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHcpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('hcp_name');
            $table->string('hcp_spec');
            $table->string('hcp_email')->unique();
            $table->string('hcp_password');
            $table->string('hcp_pic');
            $table->rememberToken();
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
        Schema::drop('hcps');
    }
}
