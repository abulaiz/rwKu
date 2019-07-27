<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('necessity');
            $table->string('nik');
            $table->date('kk_date');
            $table->string('skp_number');
            $table->date('skp_date');
            $table->smallInteger('status');
            $table->timestamps();

            $table->foreign('nik')
                  ->references('nik')->on('residents')
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
        Schema::dropIfExists('submissions');
    }
}
