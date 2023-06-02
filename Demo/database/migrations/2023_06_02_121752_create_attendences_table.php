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
            $table->time('check_in_time')->nullable();
            $table->time('check_out_time')->nullable();
            $table->time('total_hours')->nullable();



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
