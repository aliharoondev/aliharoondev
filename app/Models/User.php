<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hasRole( $roleName ) {
        // if the user has a role of super_admin from all the roles
        foreach ($this->roles as $role){
            if($role->slug == $roleName){
                return true;
            }
        }
        return false;
    }

    public function hasRoutePermission( $route ) {
        // get all the route permissions
        $permissions = $this->permissions();
        if(array_key_exists($route, $permissions)){
            return true;
        }
        return false;
    }

    public function permissions( ) {
        $permissions = [];
        foreach ($this->roles as $role){
            $permissions = array_merge($permissions, $role->permissions);
        }
        if(!is_null($this->permissions) && !empty($this->permissions)){
            $permissions = array_merge($permissions, $this->permissions);
        }

//        if($this->isSuperAdmin()){
//            $routes = Route::getRoutes();
//
//            $permissions = [];
//            foreach ($routes as $route) {
//                if ($route->getName() != "" && !substr_count($route->getName(), 'payment') && substr_count($route->getName(), 'api.')) {
//                    $permissions[] = $route->getName();
//                }
//            }
//        }

        return $permissions;
    }

    public function roles(){
        return $this->belongsToMany(Role::class, 'role_user','user_id', 'role_id');
    }
}
