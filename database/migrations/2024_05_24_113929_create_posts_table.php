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
            $table->uuid('_id')->primary();
            $table->string('slug')->unique();
            $table->string('title');
            $table->foreignId('author_id')->constrained(
                table: 'users',
                column: '_id',
                indexName: 'post_author_id'
            );
            $table->foreignId('category_id')->constrained(
                table: 'categories',
                column: '_id',
                indexName: 'post_category_id'
            );
            $table->text('body');
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
