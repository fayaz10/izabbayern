<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publishes', function (Blueprint $table) {
            $table->id();
            $table->string('de_title');
            $table->string('de_subtitle');
            $table->text('de_description');
            $table->string('de_author');
            $table->string('fa_title');
            $table->string('fa_subtitle');
            $table->text('fa_description');
            $table->string('fa_author');
            $table->string('pa_title');
            $table->string('pa_subtitle');
            $table->text('pa_description');
            $table->string('pa_author');
            $table->string('en_title');
            $table->string('en_subtitle');
            $table->text('en_description');
            $table->string('en_author');
            $table->string('status');
            $table->string('file');
            $table->string('image');
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
        Schema::dropIfExists('publishes');
    }
}
