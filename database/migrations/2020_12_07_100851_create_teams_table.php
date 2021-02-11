<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('header');
            $table->string('category');
            $table->string('fa_name');
            $table->string('fa_subname');
            $table->string('fa_description');
            $table->string('pa_name');
            $table->string('pa_subname');
            $table->string('pa_description');
            $table->string('en_name');
            $table->string('en_subname');
            $table->string('en_description');
            $table->string('de_name');
            $table->string('de_subname');
            $table->string('de_description');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('image');
            $table->string('status');
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
        Schema::dropIfExists('teams');
    }
}
