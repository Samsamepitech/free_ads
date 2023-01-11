<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->string('category_name')->nullable(); 
            $table->text('content');
            $table->string('location');
            $table->float('price');
            $table->text('file_path1')->nullable();
            $table->text('file_path2')->nullable();
            $table->text('file_path3')->nullable();
            $table->bigInteger('user_id')->unsigned()->default();
            $table->timestamps();
            //$table->foreign('user_id')->references('id')->on('users');
           // $table->foreign('category_id')->references('id')->on('category');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
