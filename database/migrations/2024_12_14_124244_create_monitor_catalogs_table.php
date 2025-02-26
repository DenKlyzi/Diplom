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
        Schema::create('monitor_catalogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('preview_image');
            $table->integer('price');
            $table->integer('count');
            $table->string('diagonal');
            $table->string('monitor_type');
            $table->integer('frame_rate');
            $table->integer('game_monitor');
            $table->integer('response_time');
            $table->boolean('is_published')->default(true);
            $table->foreignId('category_id')->nullable()->index()->constrained('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitor_catalogs');
    }
};
