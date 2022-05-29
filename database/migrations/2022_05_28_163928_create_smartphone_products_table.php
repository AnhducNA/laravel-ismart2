<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartphone_products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->text('content');
            $table->string('thumbnail', 250);
            // unsigned  chỉ lưu số dương
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('smartphone_cat_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('smartphone_cat_id')->references('id')->on('smartphone_categories')->onDelete('cascade');
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
        Schema::dropIfExists('smartphone_products');
    }
};
