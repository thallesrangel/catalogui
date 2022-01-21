<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementManagementCoupon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('announcement_management_coupon');
        Schema::create('announcement_management_coupon', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('announcement_id')->unsigned();
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('description')->nullable();
            $table->string('link')->nullable();
            $table->string('flag_status')->default('enabled');
        });

        Schema::table('announcement_management_coupon', function($table) {
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
        Schema::dropIfExists('announcement_management_coupon');
    }
}
