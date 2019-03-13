<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->string('nik')->unique();
            $table->unsignedInteger('kk_number_id');
            $table->string('sex');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('address');
            $table->string('rt_rw');
            $table->string('kel_village');
            $table->string('sub_district');
            $table->string('religion');
            $table->boolean('married');
            $table->string('job');
            $table->string('citizenship');
            $table->timestamps();

            $table->foreign('kk_number_id')
                  ->references('id')->on('kk_numbers')
                  ->onDelete('cascade')->onUpdate('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('residents');
    }
}
