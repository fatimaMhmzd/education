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
        Schema::create('education_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('masterId')->nullable();
            $table->bigInteger('creatorId')->nullable();
            $table->bigInteger('typeId')->nullable();
            $table->bigInteger('groupId')->nullable();
            $table->string('title');
            $table->string('subTitle');
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->text('seoDescription')->nullable();
            $table->text('seoKeyboard')->nullable();
            $table->longText('description')->nullable();
            $table->longText('properties')->nullable();
            $table->longText('appropriate')->nullable();
            $table->smallInteger('level')->dafault(1);//1=>begginner , 2=>medium ,3=>advance

            $table->string('length')->nullable();
            $table->integer('price')->nullable();
            $table->integer('offPercent')->nullable();
            $table->integer('mark')->default(0);
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->text('video')->nullable();
            $table->string('videoCover')->nullable();
            $table->smallInteger('status')->default(1);
            $table->bigInteger('likes')->default(0);
            $table->bigInteger('disLikes')->default(0);


            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_products');
    }
};
