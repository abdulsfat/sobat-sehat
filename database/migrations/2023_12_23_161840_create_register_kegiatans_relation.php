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
        Schema::table('register_kegiatan', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('kegiatan_id')->references('id')->on('kegiatan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_kegiatan_relation');
    }
};
