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
        Schema::create('videos', function (Blueprint $table) {
            $table->comment('جدول ذخیره فایل های ویدیویی');
            $table->id();
            $table->morphs('videoable');
            $table->string('title')->nullable()->comment('عنوان');
            $table->string('original_name')->nullable()->comment('نام اصلی فایل تصویری');
            $table->string('video')->comment('نام فایل تصویری');
            $table->string('type')->nullable()->comment('نوع فایل تصویری');
            $table->string('url')->nullable()->comment('آدرس کامل فایل تصویری');
            $table->tinyInteger('status')->nullable()->comment('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
