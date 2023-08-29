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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('address_block_id')->constrained()->onDelete('cascade');
            $table->string('address');
            $table->integer('cidr');
            $table->enum('tag', ['Libre', 'Client VPS', 'Client VDS', 'Client Dédié', 'Client Tunnel', 'Infrastructure', 'VM interne'])->default('Libre');
            $table->string('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
