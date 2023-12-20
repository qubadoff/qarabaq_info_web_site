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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id');
            $table->text('name');
            $table->text('excerpt')->nullable();
            $table->text('body')->nullable();
            $table->text('image')->nullable();
            $table->text('slug');
            $table->enum('status', ['active', 'de_active', 'pending', 'draft'])->default('draft');
            $table->text('meta_description')->nullable();
            $table->text('meta_tags')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
