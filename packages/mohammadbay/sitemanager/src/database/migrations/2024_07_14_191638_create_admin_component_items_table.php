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
        Schema::create('admin_component_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('component_id')->comment('مربوط به کدام کامپوننت هست');
            $table->string('title')->comment('عنوان فارسی');
            $table->string('name')->comment('اسم انگلیسی');
            $table->unsignedBigInteger('type_id')->comment('مربوط به کدام جنس دیتابیس هست');
            $table->boolean('required')->default(false)->comment('اجباری هست؟');
            $table->boolean('in_list')->default(false)->comment('در لیست نمایش داده شود؟');
            $table->bigInteger('max')->default(0)->comment('بیشترین طول');
            $table->boolean('active')->default(true)->comment('وضعیت فعال بودن');
            $table->bigInteger('relation_component_id')->nullable()->comment('به جدول خاصی وصل باشد.');
            $table->string('relation_type')->nullable()->comment('نوع ریلیشن');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_component_items');
    }
};
