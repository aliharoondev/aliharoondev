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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('section_id')->constrained('sections');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('company_name');
            $table->string('company_address');
            $table->enum('work_type',['remote','onsite'])->default('remote');
            $table->enum('job_type',['part time','full time','freelance'])->default('freelance');
            $table->text('detail')->nullable();
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
        Schema::dropIfExists('experiences');
    }
};
