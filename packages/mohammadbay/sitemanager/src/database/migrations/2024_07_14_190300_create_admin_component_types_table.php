<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admin_component_types', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('عنوان فارسی');
            $table->string('type')->comment('نوع ایتم(همانی که در جداول دیتابیس تعریف می شود)');
            $table->softDeletes();
            $table->timestamps();
        });
        DB::table('admin_component_types')->insert([
            ['title' => 'عدد','type'=>'integer'],
            ['title' => 'عدد خیلی کوچک','type'=>'tinyInteger'],
            ['title' => 'اعداد کوچک','type'=>'smallInteger'],
            ['title' => 'اعداد متوسط','type'=>'mediumInteger'],
            ['title' => 'اعداد بزرگ','type'=>'bigInteger'],

            ['title' => 'اعشاری','type'=>'float'],
            ['title' => 'اعشاری','type'=>'double'],

            ['title' => 'متن کوتاه','type'=>'string'],
            ['title' => 'متن','type'=>'text'],
            ['title' => 'متن بلند','type'=>'longText'],
            ['title' => 'متن متوسط','type'=>'mediumText'],

            ['title' => 'تاریخ','type'=>'date'],
            ['title' => 'تاریخ ساعت','type'=>'dateTime'],

            ['title' => 'بلی خیر','type'=>'boolean'],

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_component_types');
    }
};
