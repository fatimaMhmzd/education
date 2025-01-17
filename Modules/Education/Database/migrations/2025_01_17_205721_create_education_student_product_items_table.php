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
        Schema::create('education_student_product_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('studentId');
            $table->bigInteger('productItemId');
            $table->bigInteger('productId')->nullable();
            $table->bigInteger('seasonId')->nullable();
            $table->bigInteger('lessonsId')->nullable();
            $table->string('status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_student_product_items');
    }
};
