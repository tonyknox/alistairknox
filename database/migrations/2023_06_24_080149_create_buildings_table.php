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
        Schema::create('buildings', function (Blueprint $table) {
            $table->id('buildid');
            $table->string('buildname');
            $table->text('builddescription');
            $table->string('date_built');
            $table->integer('address_adrid');
            $table->integer('address_adrid');
            $table->integer('address_adrid');
            $table->string('client');
            $table->text('buildnote');
            $table->text('buildimage');
            $table->text('buildplan');
            $table->string('jobnumber');
            $table->string('numdrawings');
            $table->string('otherprofessional');
            $table->text('drawingdescription');
            $table->string('drawinglocation');
            $table->string('keywords');
            $table->string('year_built');
            $table->string('manuscriptlocation');
            $table->text('manuscriptinfo');
            $table->string('drawinglocation2');
            $table->text('buildplan2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buildings');
    }
};
