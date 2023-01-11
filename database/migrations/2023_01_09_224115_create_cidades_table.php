<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        if (!Schema::hasTable('cidades')) {
            Schema::create('cidades', function (Blueprint $table) {

                $table->id();
                $table->string('nome', 100);
                $table->string('cep', 100);
                $table->string('populacao');
                $table->string('estado_sigla', 2);
//                $table->foreignId('estado_id')->constrained();
//                $table->foreign('estado_sigla')->references('sigla')->on('estados');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cidades');
    }
};
