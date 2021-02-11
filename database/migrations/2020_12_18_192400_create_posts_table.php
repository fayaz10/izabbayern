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
            $table->id();
            $table->string('category')->nullable();;
            $table->string('post_type')->nullable();;
            $table->string('header')->nullable();
            $table->string('sub_header')->nullable();
            $table->string('fa_title')->nullable();;
            $table->string('fa_subtitle')->nullable();;
            $table->text('fa_description')->nullable();;
            $table->string('pa_title')->nullable();;
            $table->string('pa_subtitle')->nullable();;
            $table->text('pa_description')->nullable();;
            $table->string('de_title')->nullable();;
            $table->string('de_subtitle')->nullable();;
            $table->text('de_description')->nullable();;
            $table->string('en_title')->nullable();;
            $table->string('en_subtitle')->nullable();;
            $table->text('en_description')->nullable();;
            $table->string('date')->nullable();
            $table->string('timing')->nullable();
            $table->string('location')->nullable();
            $table->string('status')->nullable();;
            $table->string('speaker')->nullable();
            $table->string('file')->nullable();
            $table->string('youtubeLink')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
