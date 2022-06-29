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
        Schema::create('itens_pedidos', function (Blueprint $table) {
            $table->id();
            $table->integer("quantidade");
            $table->decimal("valor", 10,2);
            $table->dateTime("dt_item");
            $table->foreignId("produto_id")->references("id")->on("produtos")
            ->onDelete("cascade");
            $table->foreignId("pedido_id")->references("id")->on("pedidos")
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
        Schema::dropIfExists('itens_pedidos');
    }
};
