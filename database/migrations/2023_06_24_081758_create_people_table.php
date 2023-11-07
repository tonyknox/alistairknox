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
        Schema::create('people', function (Blueprint $table) {
            $table->id('ppid');
            $table->enum('pptype');
            $table->longText('ppinfo');
            $table->string('ppdescription');
            $table->string('ppfirst_name');
            $table->string('ppname');
            $table->string('ppimgname');
            $table->text('ppimgpath');
            $table->string('ppimgext');
            $table->text('ppalt');
            $table->text('ppcaption');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
