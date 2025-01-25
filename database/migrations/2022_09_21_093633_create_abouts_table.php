<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')->constrained('sections');
            $table->string('title');
            $table->string('short_description');
            $table->date('birth_date');
            $table->string('website_url')->default('N/A');
            $table->string('degree')->default('N/A');
            $table->string('phone')->default('N/A');
            $table->string('email')->default('N/A');
            $table->string('address')->default('N/A');
            $table->string('freelance')->default('Available');
            $table->text('detail');
            $table->string('image')->default('global/about/aliharoon.jpg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
};
