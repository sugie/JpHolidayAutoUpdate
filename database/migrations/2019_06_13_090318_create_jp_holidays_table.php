<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJpHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jp_holidays', function (Blueprint $table) {
//            $table->increments('id');
            $table->date('holiday')->comment('祝祭日');
            $table->string('hname')->comment('祝祭日名称');
            $table->timestamps();
            $table->primary('holiday');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jp_holidays');
    }
}
