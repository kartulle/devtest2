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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string("cep");
            $table->string("logradouro");
            $table->string("numero");
            $table->string("cidade");
            $table->string("estado");
            $table->string("complemento");
            $table->foreignId("usuario_id")->references("id")->on("usuarios")
            ->onDelete("cascade");

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
        Schema::dropIfExists('enderecos');
    }
};
