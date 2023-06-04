<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->text('summary')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedBigInteger('deleted_by')->nullable();
        });
        User::create([
            'name' => 'M.Ali Haroon',
            'title' => 'Software Engineer',
            'image' => 'user/aliharoon-profile.png',
            'summary' => 'Highly skilled and motivated Full Stack Developer with over 5+ years of experience in developing and maintaining web applications. With a comprehensive understanding of how to design and build fast, secure, and scalable applications. Excellent problem-solving skills, and a commitment to producing high-quality work. Seeking a challenging role where I can utilize my skills and experience to create innovative and user-friendly web applications.',
            'address' => 'Saddiq Trade Center Gulberg, Lahore',
            'phone' => '+92 345 4647216',
            'email' => 'me@aliharoon.dev',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
