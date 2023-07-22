<?php

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    use SoftDeletes;

    public function up(): void
    {
        Schema::create('observacoes', function (Blueprint $table) {
            $table->id();
            $table->text('observacao');
            $table->date('prazo')->nullable();
            $table->string('url_tarefa')->nullable();
            $table->unsignedBigInteger('tarefa')->nullable();
            $table->unsignedBigInteger('contrato_id');
            $table->foreign('contrato_id')->references('contratos')->on('id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('observacoes');
    }
};
