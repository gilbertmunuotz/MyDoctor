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
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->unsignedInteger('doctor_id');
            // $table->string('doctor')->nullable();
            $table->string('date')->nullable();
            $table->string('message')->nullable();
            $table->string('status')->nullable();
            $table->string('user_id')->nullable();
            $table->timestamps();
            $table->foreign('doctor_id')->references('id')->on('newdoc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
