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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('masach');
            $table->string('tensach');
            $table->string('tacgia');
            $table->string('nxb');
            $table->string('theloai');
            $table->integer('giatien');
            $table->integer('soluong');
            $table->integer('trongluong');
            $table->integer('sotrang');
            $table->string('ngonngu');
            $table->string('anhminhhoa');
            $table->text('mota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
