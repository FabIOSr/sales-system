<?php

use App\Models\Category;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('barcode')->nullable();
            $table->decimal('cost', 10,2)->default(0);
            $table->decimal('price', 10,2)->default(0);
            $table->integer('stock')->default(0);
            $table->integer('alerts')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('category_id')->nullable()->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
