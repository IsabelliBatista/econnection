<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyClienteEnderecoEntrega extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cliente', function (Blueprint $table) {
            $table->unsignedBigInteger('endereco_entrega_id');

            $table->foreign('endereco_entrega_id')->references('id')->on('endereco_entrega');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cliente', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['endereco_entrega_id']);
            Schema::enableForeignKeyConstraints();
        });
    }
}
