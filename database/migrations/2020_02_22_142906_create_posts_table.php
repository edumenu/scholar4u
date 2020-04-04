<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('post_title');
            $table->unsignedBigInteger('user_id');     //reference to the User's id. Foreign key
            $table->string('post_user_name');
            $table->string('post_user_picture');
            $table->string('post_category')->nullable();
            $table->string('post_content');
            $table->string('post_comment_count')->default('0');
            $table->string('post_view_count')->default('0');
            $table->string('post_likes')->default('0');
            $table->string('post_dislikes')->default('0');

            $table->index('user_id');     //For quicker queries
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
