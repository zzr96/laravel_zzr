<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('stus')) {
             Schema::create('stus', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 12);
                $table->enum('sex', ['男', '女'])->default('男');
                $table->string('class',4);
                $table->tinyInteger('age');
                $table->timestamps();
            });
        }

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stus');
    }
}
