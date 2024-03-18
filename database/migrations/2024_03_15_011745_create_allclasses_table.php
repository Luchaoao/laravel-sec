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
        Schema::create('allclasses', function (Blueprint $table) {
            $table->id();
            $table->string('class_name')->comment('課程名稱');
            $table->longtext('class_introduce')->comment('課程簡介');
            $table->longText('class_pic')->nullable()->comment('課程照片');
            $table->integer('class_teacher_id')->comment('課程教師id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allclasses');
    }
};
