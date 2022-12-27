<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modul', function (Blueprint $table) {
            $table->integer('modul_id')->primary();
            $table->string('nama', 50)->nullable();
            $table->string('penulis', 50)->nullable();
            $table->string('deskripsi', 100)->nullable();
            $table->text('keyword')->nullable();
            $table->string('gambar')->nullable();
            $table->string('dokumen')->nullable();
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
        Schema::dropIfExists('modul');
    }
}
