<?php

namespace App\Providers;

use App\Models\SocialLink;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $socialLinks = SocialLink::all();
        View::share('socialLinks', $socialLinks);    
        
        $users = User::where('id',2)->first();
        View::share('users', $users);    
    }
}
