<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_users', function (Blueprint $table) {
            $table->unsignedBigInteger('ads_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('ads_id')->references('id')->on('ads');
            //$table->foreign('user_id')->references('id')->on('users');
            //$table->primary(array('annonces_id', 'user_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads_users');
    }
}
