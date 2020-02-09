<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddedColumnsToProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
          $table->unsignedBigInteger('user_id');
          $table->string('image')->nullable();
          $table->string('address')->nullable();
          $table->string('current_school')->nullable();
          $table->string('gpa')->nullable();
          $table->string('major')->nullable();
          $table->string('phone_number')->nullable();
          $table->string('birthday')->nullable();
          $table->string('citizenship')->nullable();
          $table->string('gender')->nullable();
          $table->string('disabilities')->nullable();
          $table->string('ethnicity')->nullable();
          $table->string('military')->nullable()->default('no');
          $table->string('sports')->nullable();
          $table->string('fraternity')->nullable();

          $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            //
        });
    }
}
