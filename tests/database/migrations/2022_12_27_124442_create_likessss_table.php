<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikessssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likessss', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('likeable_type');
            $table->unsignedBigInteger('likeable_id');
            $table->timestamps();
            
            $table->index(['likeable_type', 'likeable_id'], 'likes_likeable_type_likeable_id_index');
            $table->foreign('user_id', 'likessss_ibfk_1')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likessss');
    }
}
