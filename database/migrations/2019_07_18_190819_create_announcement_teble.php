<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnouncementTeble extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('announcements', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('slug');
      $table->bigInteger('price');
      $table->bigInteger('count');
      $table->unsignedInteger('user_id');
      $table->unsignedInteger('category_id');
      $table->unsignedInteger('region_id');

      $table->foreign('user_id')->references('id')->on('users');
      $table->foreign('category_id')->references('id')->on('categories');
      $table->foreign('region_id')->references('id')->on('regions');

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
    Schema::dropIfExists('announcements');
  }
}
