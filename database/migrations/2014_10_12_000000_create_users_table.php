<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('img')->nullable();
            $table->enum('acesso',['Admin', 'User'])->default('User');
            $table->date('data_de_nascimento');
            $table->string('sexo');
            $table->string('turma')->default('0')->nullable();
            $table->string('frequencia_id')->nullable();
            $table->string('matricula');
            $table->enum('avaliacao',['RUIM', 'REGULAR', 'BOM', 'ÓTIMO', 'O MELHOR'])->default('BOM')->nullable();
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
}
