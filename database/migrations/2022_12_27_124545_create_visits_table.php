<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->string('primary_key');
            $table->string('secondary_key')->nullable();
            $table->unsignedBigInteger('score');
            $table->longText('list')->nullable();
            $table->timestamp('expired_at')->nullable();
            $table->timestamps();
            
            $table->unique(['primary_key', 'secondary_key'], 'visits_primary_key_secondary_key_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
}
