<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        // update the permissions of the user to the session
        session()->forget('permissions');
        $user = auth()->user()->load('roles');
        $permissions = json_decode($user->roles->first()->permissions,true);
        session(['permissions' => $permissions]);
        return view('backend.content.admin.admin-dashboard');
    }

    public function userDashboard()
    {
        return view('backend.content.users.users-dashboard');
    }
}
