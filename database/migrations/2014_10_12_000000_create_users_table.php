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
            $table->string('nombre')->nullable();//Requerido
            $table->string('apellidos')->nullable();
            $table->string('email')->unique()->nullable();
            $table->integer('cp')->nullable(true);//opcional
            $table->date('f_nacimiento')->nullable(true);
            $table->string('localidad')->nullable(true);
            $table->integer('tlf')->nullable(true);
            $table->string('provincia')->nullable(true);
            $table->boolean('privilegios')->default(0);
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
