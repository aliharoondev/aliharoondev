<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'General\PagesController@landing')->name('landing');
Route::post('/contact', 'General\ContactController@store')->name('contact.store');
Route::get('portfolio-detail/{id}', 'General\PagesController@portfolio_detail')->name('portfolio-detail');


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home.index');
    Route::group(['middleware' => ['permissions']], function () {
        Route::get('admin/dashboard', 'V1\DashboardController@adminDashboard')->name('admin.dashboard');
        Route::get('user/dashboard', 'V1\DashboardController@userDashboard')->name('users.dashboard');

        //User Section
        Route::group(['prefix' => 'users'], function () {
            Route::get('{user}/role/attach', 'V1\Roles\RoleController@attachRoleToUserCreate')->name('users.attach.role.index');
            Route::post('{user}/role/attach', 'V1\Roles\RoleController@attachRoleToUserStore')->name('users.attach.role.store');
        });
        Route::resource('users','Users\UserController');

        // Role section
        Route::group(['prefix' => 'roles'], function () {
            Route::get('{role}/users', 'V1\Roles\RoleController@rolesAttachedUsers')->name('roles.attached.users');
            Route::get('{role}/permissions', 'V1\Roles\RolePermissionsController@rolePermissions')->name('roles.permissions');
            Route::post('{role}/permissions', 'V1\Roles\RolePermissionsController@rolePermissionsStore')->name('roles.permissions.store');
        });
        Route::resource('roles', 'V1\Roles\RoleController');

        Route::resource('skills', 'V1\Skills\SkillController');
        Route::resource('facts', 'V1\Facts\FactController');
        Route::resource('services', 'V1\Services\ServiceController');
        Route::resource('sections', 'V1\Section\SectionController');
        Route::post('status', 'V1\Section\SectionController@status')->name('section.status');
        Route::resource('about', 'V1\About\AboutController');
        Route::resource('experience', 'V1\Experience\ExperienceController');
        Route::resource('sociallink', 'V1\Social\SocialLinkController');
        Route::resource('testimonial', 'V1\Testimonial\TestimonialContoller');
        Route::resource('contact', 'V1\Contact\ContactController');
        Route::resource('education', 'V1\Educations\EducationController');
        Route::resource('portfolio', 'V1\Portfolio\PortfolioController');
        Route::resource('portfolio-details', 'V1\Portfolio\PortfolioDetailController');
    });
});

