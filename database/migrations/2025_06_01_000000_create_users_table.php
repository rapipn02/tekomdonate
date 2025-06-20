<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('foto')->default('default.jpg');
            $table->boolean('is_admin')->default(false);

            // --- PERBAIKAN DITAMBAHKAN DI SINI ---
            // Menambahkan kolom 'id_jenis' secara langsung ke dalam tabel users
            // Dibuat nullable agar user lama (jika ada) tidak error.
            $table->string('id_jenis', 10)->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
