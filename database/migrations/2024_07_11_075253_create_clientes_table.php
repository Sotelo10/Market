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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 20);
            $table->string('apellidos', 20);
            $table->char('numero', 9);
            $table->char('dni', 8);
            $table->string('nombre_producto', 20);             $table->decimal('monto_total', 10, 2);
            $table->timestamp('fecha_hora_compra');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};

