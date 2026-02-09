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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('short_desc');
            $table->string('title1');
            $table->string('title2');
            $table->string('title3');
            $table->text('description');
            $table->string('photo');
            $table->string('title_skills');
            $table->string('short_desc_skills');
            $table->string('skill1');
            $table->string('skill1_percentage');
            $table->string('skill2');
            $table->string('skill2_percentage');
            $table->string('skill3');
            $table->string('skill3_percentage');
            $table->string('skill4');
            $table->string('skill4_percentage');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
