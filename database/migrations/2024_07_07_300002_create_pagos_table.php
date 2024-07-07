<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('cantidad');
            $table->string('concepto');
            $table->string('fecha_pago');

            $table->timestamps();

            $table->unsignedBigInteger('tipopago_id');
            $table->foreign('tipopago_id')->references('id')->on('tipopagos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
