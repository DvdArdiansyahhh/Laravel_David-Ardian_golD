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
        Schema::create('detail_profile', function (Blueprint $table) {
            $table->string('nim', 10)->primary();
            $table->string('nama_mhs');
            $table->string('prodi_mhs');
            $table->string('address_mhs');
            $table->string('no-telp_mhs');
            $table->date('date_mhs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_profile');
    }
};
