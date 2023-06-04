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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->text('text');
            $table->string('image');

            $table->string('image1');
            $table->text('title1');
            $table->text('text1');

            $table->string('image2');
            $table->text('title2');
            $table->text('text2');

            $table->string('image3');
            $table->text('title3');
            $table->text('text3');

            $table->string('image4');
            $table->text('title4');
            $table->text('text4');

            $table->string('image5');
            $table->text('title5');
            $table->text('text5');

            $table->string('image6');
            $table->text('title6');
            $table->text('text6');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
