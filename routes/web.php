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
-----------------------
| Universal Dashboard |
-----------------------
| Development Credenetials
| username: tshego@swaydev.co.za
| pass: m3zum0_130y
-----------------------
*/

// Authentication Routes...
Route::get('$d_3c0mm3rc3_login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('$d_3c0mm3rc3_login', 'Auth\LoginController@login');
Route::post('$d_3c0mm3rc3_logout', 'Auth\LoginController@logout')->name('logout');

Route::get('$d_3c0mm3rc3_register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('$d_3c0mm3rc3_register', 'Auth\RegisterController@register');

Route::get('$d_3c0mm3rc3_password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('$d_3c0mm3rc3_password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('$d_3c0mm3rc3_password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('$d_3c0mm3rc3_password/reset', 'Auth\ResetPasswordController@reset');

// Dashboard Routes...
Route::get('/$d_3c0mm3rc3', 'DashboardController@index')->name('dashboardIndex');

    // ABOUT
Route::get('/$d_3c0mm3rc3/about', 'DashboardController@about')->name('dashboardAbout');
Route::put('/$d_3c0mm3rc3/about/{about}', 'DashboardController@updateAbout')->name('updateAbout');
Route::put('/$d_3c0mm3rc3/values/{value}', 'DashboardController@updateValue')->name('updateValue');
Route::put('/$d_3c0mm3rc3/stats/{stat}', 'DashboardController@updateStat')->name('updateStat');

    // SERVICES
Route::get('/$d_3c0mm3rc3/services', 'DashboardController@services')->name('dashboardServices');
Route::get('/$d_3c0mm3rc3/services/add', 'DashboardController@addService')->name('addService');
Route::post('/$d_3c0mm3rc3/services/save', 'DashboardController@saveServices')->name('saveServices');
Route::get('/$d_3c0mm3rc3/services/{service}/edit', 'DashboardController@editService')->name('editServices');
Route::put('/$d_3c0mm3rc3/services/{service}/update', 'DashboardController@updateService')->name('updateService');
Route::delete('/$d_3c0mm3rc3/services/{service}/delete', 'DashboardController@deleteService')->name('deleteService');

    // PORTFOLIO
Route::get('/$d_3c0mm3rc3/portfolio', 'DashboardController@portfolio')->name('dashboardPortfolio');
Route::get('/$d_3c0mm3rc3/project/add', 'DashboardController@addProject')->name('addProject');
Route::post('/$d_3c0mm3rc3/projects/store', 'DashboardController@storeProject')->name('storeProject');
Route::post('/$d_3c0mm3rc3/projects/save', 'DashboardController@saveProject')->name('saveProject');
Route::get('/$d_3c0mm3rc3/projects/{project}/edit', 'DashboardController@editProject')->name('editProject');
Route::get('/$d_3c0mm3rc3/projects/{project}/store-update', 'DashboardController@storeUpdateProject')->name('storeUpdateProject');
Route::post('/$d_3c0mm3rc3/projects/{project}/delete-image', 'DashboardController@deleteImage')->name('deleteImage');
Route::put('/$d_3c0mm3rc3/projects/{project}/update', 'DashboardController@updateProject')->name('updateProject');
Route::delete('/$d_3c0mm3rc3/projects/{project}/delete', 'DashboardController@deleteProject')->name('deleteProject');

    // TESTIMONIALS
Route::get('/$d_3c0mm3rc3/testimonials/add', 'DashboardController@addTestimonial')->name('addTestimonial');
Route::post('/$d_3c0mm3rc3/testimonials/save', 'DashboardController@saveTestimonial')->name('saveTestimonial');
Route::get('/$d_3c0mm3rc3/testimonials/{testimonial}/edit', 'DashboardController@editTestimonial')->name('editTestimonials');
Route::put('/$d_3c0mm3rc3/testimonials/{testimonial}/update', 'DashboardController@updateTestimonial')->name('updateTestimonial');
Route::delete('/$d_3c0mm3rc3/testimonials/{testimonial}/delete', 'DashboardController@deleteTestimonial')->name('deleteTestimonial');

    // TEAM
Route::get('/$d_3c0mm3rc3/team', 'DashboardController@team')->name('dashboardTeam');
Route::get('/$d_3c0mm3rc3/team/add', 'DashboardController@addMember')->name('addMember');
Route::post('/$d_3c0mm3rc3/team/save', 'DashboardController@saveMember')->name('saveMember');
Route::get('/$d_3c0mm3rc3/team/{member}/edit', 'DashboardController@editMember')->name('editMember');
Route::put('/$d_3c0mm3rc3/team/{member}/update', 'DashboardController@updateMember')->name('updateMember');
Route::delete('/$d_3c0mm3rc3/team/{member}/delete', 'DashboardController@deleteMember')->name('deleteMember');

    // CONTACT
Route::get('/$d_3c0mm3rc3/contacts', 'DashboardController@contacts')->name('dashboardContact');
Route::get('/$d_3c0mm3rc3/contacts/add', 'DashboardController@addContact')->name('addContact');
Route::post('/$d_3c0mm3rc3/contacts/save', 'DashboardController@saveContact')->name('saveContact');
Route::get('/$d_3c0mm3rc3/contacts/{contact}/edit', 'DashboardController@editContact')->name('editContact');
Route::put('/$d_3c0mm3rc3/contacts/{contact}/update', 'DashboardController@updateContact')->name('updateContact');
Route::delete('/$d_3c0mm3rc3/contacts/{contact}/delete', 'DashboardController@deleteContact')->name('deleteContact');

Route::get('/$d_3c0mm3rc3/contacts/add/social_link', 'DashboardController@addSocialLink')->name('addSocialLink');
Route::post('/$d_3c0mm3rc3/contacts/save/social_link', 'DashboardController@saveSocialLink')->name('saveSocialLink');
Route::get('/$d_3c0mm3rc3/contacts/{contact}/edit/social_link', 'DashboardController@editSocialLink')->name('editSocialLink');
Route::put('/$d_3c0mm3rc3/contacts/{contact}/update/social_link', 'DashboardController@updateSocialLink')->name('updateSocialLink');
Route::delete('/$d_3c0mm3rc3/contacts/{contact}/delete/social_link', 'DashboardController@deleteSocialLink')->name('deleteSocialLink');

    // SHOP
Route::get('/$d_3c0mm3rc3/shop', 'DashboardController@shop')->name('dashboardShop');
Route::get('/$d_3c0mm3rc3/shop/category/add', 'DashboardController@addCategory')->name('addCategory');
Route::post('/$d_3c0mm3rc3/category/save', 'DashboardController@saveCategory')->name('saveCategory');
Route::get('/$d_3c0mm3rc3/shop/item/add', 'DashboardController@addItem')->name('addItem');
Route::post('/$d_3c0mm3rc3/shop/item/saveItem', 'DashboardController@saveItem')->name('saveItem');
Route::post('/$d_3c0mm3rc3/shop/item/saveItemImages', 'DashboardController@saveItemImages')->name('saveItemImages');
