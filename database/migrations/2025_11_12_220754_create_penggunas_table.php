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
        Schema::create('penggunas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->constrained(
                table: 'roles',
                indexName: 'penggunas_role_id'
            );
            $table->string('username', 15);
            $table->string('password', 100);
            $table->string('nama_pengguna', 80);
            $table->enum('jk', ['L','P']);
            $table->string('telp', 25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggunas');
    }
};
