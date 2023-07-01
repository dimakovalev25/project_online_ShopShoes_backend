<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_tags', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('tag_id')->nullable()->index()->constrained('tags');
            $table->foreignId('product_id')->nullable()->index()->constrained('products');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_tags');
    }
};
