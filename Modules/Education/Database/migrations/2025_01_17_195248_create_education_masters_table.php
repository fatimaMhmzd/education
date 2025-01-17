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
        Schema::create('education_masters', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->text('seoDescription')->nullable();
            $table->text('seoKeyboard')->nullable();
            $table->longText('description')->nullable();
            $table->longText('rezome')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_masters');
    }
};
