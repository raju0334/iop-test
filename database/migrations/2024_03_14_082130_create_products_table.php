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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cat_id');
            $table->string('name');
            $table->string('slug');
            $table->string('buy_price');
            $table->string('price');
            $table->string('discount_price')->nullable();
            $table->unsignedInteger('qty');
            $table->string('sku')->unique();
            $table->text('short_description');
            $table->longText('long_description');
            $table->string('image');
            $table->boolean('is_stock')->default(true);
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
