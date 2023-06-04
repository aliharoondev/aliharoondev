<?php

namespace App\Providers;

use App\Models\SocialLink;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

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

        if (Schema::hasTable('social_links')) {
            $socialLinks = SocialLink::all();
            View::share('socialLinks', $socialLinks ?? null);
        }
        if (Schema::hasTable('users')) {
            $users = User::where('id',1)->first();
            View::share('users', $users);
        }



    }
}
