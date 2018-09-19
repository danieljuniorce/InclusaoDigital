<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrequenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('presenca_janeiro')->nullable();
            $table->string('falta_janeiro')->nullable();
            $table->string('abono_janeiro')->nullable();
            $table->string('presenca_fevereiro')->nullable();
            $table->string('falta_fevereiro')->nullable();
            $table->string('abono_fevereiro')->nullable();
            $table->string('presenca_marco')->nullable();
            $table->string('falta_marco')->nullable();
            $table->string('abono_marco')->nullable();
            $table->string('presenca_abril')->nullable();
            $table->string('falta_abril')->nullable();
            $table->string('abono_abril')->nullable();
            $table->string('presenca_maio')->nullable();
            $table->string('falta_maio')->nullable();
            $table->string('abono_maio')->nullable();
            $table->string('presenca_junho')->nullable();
            $table->string('falta_junho')->nullable();
            $table->string('abono_junho')->nullable();
            $table->string('presenca_julho')->nullable();
            $table->string('falta_julho')->nullable();
            $table->string('abono_julho')->nullable();
            $table->string('presenca_agosto')->nullable();
            $table->string('falta_agosto')->nullable();
            $table->string('abono_agosto')->nullable();
            $table->string('presenca_setembro')->nullable();
            $table->string('falta_setembro')->nullable();
            $table->string('abono_setembro')->nullable();
            $table->string('presenca_outubro')->nullable();
            $table->string('falta_outubro')->nullable();
            $table->string('abono_outubro')->nullable();
            $table->string('presenca_novembro')->nullable();
            $table->string('falta_novembro')->nullable();
            $table->string('abono_novembro')->nullable();
            $table->string('presenca_dezembro')->nullable();
            $table->string('falta_dezembro')->nullable();
            $table->string('abono_dezembro')->nullable();
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
        Schema::dropIfExists('frequencias');
    }
}
