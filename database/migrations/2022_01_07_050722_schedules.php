<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Schedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->text('sei');        // 追加
            $table->text('mei');

            

            $table->integer('SY');

            $table->integer('group_id');
            
            $table->integer('w1');
            $table->integer('w2');
            $table->integer('w3');
            $table->integer('w4');
            $table->integer('w5');

            $table->integer('w6');
            $table->integer('w7');
            $table->integer('w8');
            $table->integer('w9');
            $table->integer('w10');

            $table->integer('w11');
            $table->integer('w12');
            $table->integer('w13');
            $table->integer('w14');
            $table->integer('w15');

            $table->integer('w16');
            $table->integer('w17');
            $table->integer('w18');
            $table->integer('w19');
            $table->integer('w20');

            $table->integer('w21');
            $table->integer('w22');
            $table->integer('w23');
            $table->integer('w24');
            $table->integer('w25');
            $table->text('remarks');
            
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
        //
    }
}
