<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->date('d_comment')->nullable();
            $table->string('title')->nullable();
            $table->string('comment')->nullable();

            $table->foreign('product_id')->references('id')->on('products')->delete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->delete('cascade');
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
        Schema::dropIfExists('writes');
    }
}
