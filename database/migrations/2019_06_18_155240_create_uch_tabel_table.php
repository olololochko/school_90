<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUchTabelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel', function (Blueprint $table) {
            $table->bigIncrements('t_id');
            $table->bigInteger('t_up');
            $table->bigInteger('t_student');
            $table->integer('t_ocenka');
            $table->integer('t_day');
            $table->integer('t_month');
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
        Schema::dropIfExists('uch_tabel');
    }
}
