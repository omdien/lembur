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
        Schema::create('supels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('User_id');
            $table->string("sup_nomor");
            $table->timestamp("sup_tanggal");
            $table->string("sup_keterangan");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supels');
    }
};
