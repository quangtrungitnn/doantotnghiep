<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->unsignedInteger('cate_id');
            $table->string('name');
            $table->string('slug');
            $table->string('cpu');
            $table->string('ram');
            $table->string('storage');
            $table->string('display');
            $table->string('vga');
            $table->string('battery');
            $table->string('weight');
            $table->string('material');
            $table->string('kind');
            $table->string('condition');
            $table->integer('price');
            $table->string('promotion');
            $table->tinyInteger('status');
            $table->tinyInteger('featured');
            $table->string('warranty');
            $table->text('description');
            $table->string('img');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
