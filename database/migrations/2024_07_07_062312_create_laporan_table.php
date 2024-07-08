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
        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('user_id');
            $table->tinyInteger('klasifikasilaporan_id');
            $table->string('name');
            $table->tinyInteger('kartu')->default(0);
            $table->string('induk');
            $table->string('tlp');
            $table->string('email');
            $table->text('alamat');
            $table->tinyInteger('statuspelapor_id');
            $table->tinyInteger('subjeklaporan_id');
            $table->datetime('tglkejadian')->nullable();
            $table->datetime('tglpelaporan')->nullable();
            $table->string('judul');
            $table->text('description');
            $table->tinyInteger('unit_id');
            $table->string('image');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
