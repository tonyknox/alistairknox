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
        Schema::create('akimages', function (Blueprint $table) {
            $table->id('imgid');
            $table->string('imgname');
            $table->string('imgpath');
            $table->string('imgexgtension');
            $table->string('alt');
            $table->string('caption');
            $table->string('credit');
            $table->decimal('width');
            $table->keywords('keywords');
            $table->integer('building_buildid');
            $table->integer('people_ppid');
            $table->integer('directories_dirid');
            $table->integer('chapters_chapid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akimages');
    }
};
