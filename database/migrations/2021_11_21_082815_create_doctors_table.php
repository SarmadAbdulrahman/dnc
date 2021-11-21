<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('doctor_name');
            $table->longText('doctor_bio')->default("your bio ......");
            $table->integer('sp_id');
            $table->integer('pr_id');
            $table->integer('gov_id');
            $table->boolean('haveFacebook')->default(0);
            $table->boolean('haveInstagram')->default(0);
            $table->string('Facebook')->default(0);
            $table->string('Instagram')->default(0);
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
        Schema::dropIfExists('doctors');
    }
}
