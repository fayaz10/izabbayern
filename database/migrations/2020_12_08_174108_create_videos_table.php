<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('header');
            $table->string('fa_title');
            $table->string('fa_subtitle');
            $table->string('fa_speaker');
            $table->text('fa_description');
            $table->string('title');
            $table->string('subtitle');
            $table->string('speaker');
            $table->string('status');
            $table->text('description');
            $table->string('file');
            $table->string('image')->nullable();
            $table->string('class');
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
        Schema::dropIfExists('videos');
    }
}
