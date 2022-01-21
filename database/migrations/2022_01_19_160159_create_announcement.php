<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('announcement');
        Schema::create('announcement', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('slug', 100)->unique();
            $table->string('title');
            $table->string('description');
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('subcategory_id')->unsigned();
            $table->string('img_profile');
            $table->string('img_card');
            $table->string('email');
            $table->string('tel');
            $table->string('whatsapp')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('site')->nullable();
            $table->string('state_id');
            $table->string('city_id');
            $table->string('cep');
            $table->string('district');
            $table->string('street');
            $table->string('complement')->nullable();
            $table->string('number');
            $table->string('flag_status')->default('waiting');
            $table->timestamps();
        });

        Schema::table('announcement', function($table) {
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('category_id')->references('id')->on('category_announcement');
            $table->foreign('subcategory_id')->references('id')->on('subcategory_announcement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('announcement');
    }
}
