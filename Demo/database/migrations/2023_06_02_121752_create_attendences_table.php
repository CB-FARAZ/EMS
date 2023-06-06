<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('attendences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->date('date')->default(date('Y-m-d'));
            $table->time('time_in')->nullable();
            $table->time('time_out')->nullable();
            $table->time('duration')->nullable();
            $table->timestamps();



        });


        Schema::table('attendences' , function (Blueprint $table){


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');




        });

    }

    public function down(): void
    {
        Schema::dropIfExists('attendences');
    }
};
