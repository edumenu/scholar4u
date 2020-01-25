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
          $table->string('address')->nullable();
          $table->string('Current School')->nullable();
          $table->string('GPA')->nullable();
          $table->string('Major')->nullable();
          $table->tinyInteger('Phone number')->nullable();
          $table->string('Birthday')->nullable();
          $table->string('Citizenship')->nullable();
          $table->string('Gender')->nullable();
          $table->string('Disabilities')->nullable();
          $table->string('Ethnicity')->nullable();
          $table->string('Military')->nullable();
          $table->string('Sports')->nullable();
          $table->string('Fraternity')->nullable();

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
