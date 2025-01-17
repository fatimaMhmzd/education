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
        Schema::create('education_student_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('studentId');
            $table->bigInteger('productId');
            $table->string('status');//1=>not started, 2=>doing, 3=>ended
            $table->string('registerType');
            $table->integer('progress');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_student_products');
    }
};
