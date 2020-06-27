<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContaCorrentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conta_correntes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('agencia');
            $table->bigInteger('conta');
            $table->integer('digito');
            $table->double('saldo');
            $table->string('titular', 250);
            $table->bigInteger('cpf')->unique();
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
        Schema::dropIfExists('conta_correntes');
    }
}
