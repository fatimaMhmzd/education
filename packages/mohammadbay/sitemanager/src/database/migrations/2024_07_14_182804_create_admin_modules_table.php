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
        Schema::create('admin_modules', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('عنوان فارسی');
            $table->string('name')->comment('اسم انگلیسی ماژول');
            $table->boolean('active')->default(true)->comment('وضعیت فعال بودن ماژول');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_modules');
    }
};
