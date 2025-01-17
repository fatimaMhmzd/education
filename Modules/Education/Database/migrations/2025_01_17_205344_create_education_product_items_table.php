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
        Schema::create('education_product_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->nullable();
            $table->text('url')->nullable();
            $table->string('titlee')->nullable();
            $table->text('description')->nullable();
            $table->text('title')->nullable();
            $table->string('type')->nullable();
            $table->smallInteger('netType')->nullable();
            $table->integer('preview')->nullable();
            $table->text('text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_product_items');
    }
};
