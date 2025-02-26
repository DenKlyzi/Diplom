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
        Schema::create('cpu_catalogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('preview_image');
            $table->integer('price');
            $table->integer('count');
            $table->string('model');
            $table->string('socket');
            $table->integer('release');
            $table->integer('cores');
            $table->integer('streams');
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
        Schema::dropIfExists('cpu_catalogs');
    }
};
