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
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->string('disbursed')->default('865000');  //add 1 every hour
            $table->string('repeat')->default('750000');    //add 1 every hour
            $table->string('clients')->default('125000');  //add 1 every 2 hours
            $table->string('branches')->default('50');    //add 1 every 2 hours
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistics');
    }
};
