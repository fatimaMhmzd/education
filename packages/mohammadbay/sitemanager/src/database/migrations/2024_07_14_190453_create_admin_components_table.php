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
        Schema::create('admin_components', function (Blueprint $table) {
            $table->comment('(همان کلاس های مدل هستن)کامپونت های سیستم');
            $table->id();
            $table->string('title')->comment('عنوان فارسی');
            $table->string('name')->comment('اسم انگلیسی ماژول برای کلاس مدل و کنترلر و روت ها');
            $table->bigInteger('module_id')->nullable()->comment('ایدی ماژول');
            $table->boolean('is_active')->default(true)->comment('فعال بودن');
            $table->boolean('soft_delete')->default(true)->comment('حذف نرم');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_components');
    }
};
