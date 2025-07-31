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
        Schema::create('customer', function (Blueprint $table) {
            $table->id('customer_id');
            $table->timestamps();
            $table->string('name', 60);
            $table->string('email', 60)->unique();
            $table->string('phone')->nullable();
            $table->text('address');
            $table->date('dob')->nullable();
            $table->string('state')->nullable();
            $table->boolean('status')->default(1);
            $table->integer('points')->defaults(0);
            $table->string('password');
            $table->string('country')->nullable();
            $table->enum('gender', ["M", "F", "O"])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
