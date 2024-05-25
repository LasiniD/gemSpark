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
        Schema::create('gems', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->float('price', 10, 2);
            $table->string('where_from');
            $table->integer('carat_weight');
            $table->integer('stock');
            $table->integer('min_stock');
            $table->string('slug');
            $table->boolean('is_available')->default(true); //if even the stocks in the shop is over, make this false
            $table->foreignId('type_id')->constrained('types');
            $table->foreignId('colour_id')->constrained('colours');
            $table->foreignId('shape_id')->constrained('shapes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gems');
    }
};
