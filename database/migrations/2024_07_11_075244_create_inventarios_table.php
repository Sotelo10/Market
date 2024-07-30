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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto');
            $table->string('marca');
            $table->string('categoria');
            $table->integer('cantidad');
            $table->integer('stock');
            $table->decimal('precio', 10, 2);
            $table->bigInteger('numero');

            $table->string('codigo')->unique();
            $table->date('fecha_entrada');
            $table->enum('tipo', ['delivery', 'recojo_tienda'])
                ->default('delivery');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};

