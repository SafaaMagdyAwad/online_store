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
        Schema::table('client_products', function (Blueprint $table) {
            //
            // $table->string('user_name')->nullable();
            // $table->string('product_name')->nullable();
            $table->string('prand')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('client_products', function (Blueprint $table) {
            //
        });
    }
};