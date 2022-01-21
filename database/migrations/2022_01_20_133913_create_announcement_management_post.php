<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementManagementPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('announcement_management_post');
        Schema::create('announcement_management_post', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('announcement_id')->unsigned();
            $table->string('img_post');
            $table->string('title')->nullable();
            $table->string('value')->nullable();
            $table->string('flag_status')->default('enabled');
        });

        Schema::table('announcement_management_post', function($table) {
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('announcement_id')->references('id')->on('announcement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('announcement_management_post');
    }
}
