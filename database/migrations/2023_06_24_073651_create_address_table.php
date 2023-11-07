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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id('adrid');
            $table->string('suite');
            $table->string('stnmbr');
            $table->string('lot)number');
            $table->string('street');
            $table->string('suburb');
            $table->string('state');
            $table->string('postcode');
            $table->string('municipality');
            $table->string('sla');
            $table->integer('building_buildid');
            $table->integer('plan_plid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address');
    }
};
