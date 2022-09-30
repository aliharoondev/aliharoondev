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
            $table->date('start_date');
            $table->date('end_date');
            $table->string('company_name');
            $table->string('company_address');
            $table->enum('work_type',['remote','onsite'])->default('remote');
            $table->enum('job_type',['half time','full time','freelance','as you demand'])->default('full time');
            $table->text('detail');
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
