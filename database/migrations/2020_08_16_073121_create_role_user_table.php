<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Role;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('user_id');
            $table->enum('type',['owner','associate'])->default('owner');
            $table->string('description')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedBigInteger('deleted_by')->nullable();
        });
        Role::create([
            'name' => 'Super Admin',
            'slug' => 'superadmin',
            'description' => 'Role for super admin',
            'guard_name' => 'web',
            'permissions' =>'{"admin.dashboard":true,"users.attach.role.index":true,"users.attach.role.store":true,"users.index":true,"users.create":true,"users.store":true,"users.show":true,"users.edit":true,"users.update":true,"users.destroy":true,"roles.attached.users":true,"roles.permissions":true,"roles.permissions.store":true,"roles.index":true,"roles.create":true,"roles.store":true,"roles.show":true,"roles.edit":true,"roles.update":true,"roles.destroy":true}',
            'created_by' =>1,
            'updated_by' =>1,
        ]);

        Role::create([
            'name' => 'User',
            'slug' => 'user',
            'description' => 'Role for users',
            'guard_name' => 'web',
            'permissions' =>'{"users.dashboard":true}',
            'created_by' =>1,
            'updated_by' =>1,
        ]);

        $user1 = User::find(1);

        $user1->roles()->attach(1);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}
