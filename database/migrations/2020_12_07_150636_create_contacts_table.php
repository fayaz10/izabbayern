<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('header');
            $table->string('fa_title');
            $table->string('fa_subtitle');
            $table->text('fa_address');
            $table->string('de_title');
            $table->string('de_subtitle');
            $table->string('de_address');
            $table->string('pa_title');
            $table->string('pa_subtitle');
            $table->string('pa_address');
            $table->string('en_title');
            $table->string('en_subtitle');
            $table->string('en_address');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('phone3');
            $table->string('email1');
            $table->string('email2');
            $table->string('email3');
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
        Schema::dropIfExists('contacts');
    }
}
