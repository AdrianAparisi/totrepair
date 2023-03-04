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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');//AutoIncremental
            $table->string('name')->nullable();//Requerido
            $table->string('surname')->nullable();
            $table->string('email')->unique()->nullable();
            $table->integer('cp')->nullable(true);//opcional
            $table->date('birthday')->nullable(true);
            $table->string('locality')->nullable(true);
            $table->integer('tlf')->nullable(true);
            $table->string('province')->nullable(true);
            $table->boolean('privileges')->default(0);
            $table->string('password')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
