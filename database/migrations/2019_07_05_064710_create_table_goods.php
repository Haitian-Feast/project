<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGoods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('goods', function (Blueprint $table) {
            //increments string timestamps 类型
            $table->increments('id');
            $table->string('name');
            $table->integer('cate_id');
            $table->integer('num');
            $table->integer('color');
            $table->integer('size');
            $table->integer('price');
            $table->decimal('pic');
            $table->text('descr');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('goods');
    }
}
