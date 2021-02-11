<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('de_name')->unique();
            $table->string('en_name')->unique();
            $table->string('pa_name')->unique();
            $table->string('fa_name')->unique();
            $table->timestamps();
        });

        Schema::create('posts_tags', function (Blueprint $table) {
           
            $table->integer('posts_id');
            $table->integer('tags_id');
            $table->primary(['posts_id','tags_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('posts_tags');
    }
}
