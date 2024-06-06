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
        Schema::create('barang_supplier', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barang_id');

            $table->foreign('barang_id')->references('id')->on('barang');

            $table->unsignedBigInteger('supplier_id');

            $table->foreign('supplier_id')->references('id')->on('supplier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_supplier');
    }
};
