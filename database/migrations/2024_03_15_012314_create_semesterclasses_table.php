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
        Schema::create('semesterclasses', function (Blueprint $table) {
            $table->id();
            $table->integer('semesterid')->default(0)->comment('學年id');
            $table->integer('classid')->default(0)->comment('課程id');
            $table->integer('teacherid')->default(0)->comment('教師id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semesterclasses');
    }
};
