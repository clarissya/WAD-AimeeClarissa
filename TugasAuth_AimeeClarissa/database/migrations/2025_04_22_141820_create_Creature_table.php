<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('Creature', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('origin');
            $table->integer('power_level');
            $table->string('element');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('Creature');
    }
};
