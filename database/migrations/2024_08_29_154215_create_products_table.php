<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->decimal('cost',10,2);
    $table->decimal('price',10,2);
    $table->decimal('qty');
    $table->string('image_path')->nullable();
    $table->string('image_url')->nullable();
    $table->bigInteger('product_type_id')->unsigned();
    $table->timestamps();
    $table->foreign('product_type_id')->references('id')->on('product_types');
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
