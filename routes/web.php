<?php

use App\Http\Controllers\Web\SiteController;
use Illuminate\Support\Facades\Cookie;
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

Route::get('/', [SiteController::class, 'homePage'])->name('home');

Auth::routes();


Route::get('/team-members', [HomeController::class, 'team'])->name('team');
Route::get('/investment/plan', [HomeController::class, 'showPlan'])->name('show.plan');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/team-members/#partners', [HomeController::class, 'team'])->name('partners');
Route::get('/about-bossman', [HomeController::class, 'aboutUs'])->name('about');
Route::get('/blog/{id}', [HomeController::class, 'blogView'])->name('front.blog');

Route::get('/cookie', function () {
    return Cookie::get('referral');
});


Route::get('/privacy/page/{slug}/{id}', 'SiteController@privacyPage')->name('privacy.page');
Route::get('/contact', 'SiteController@contact')->name('contact');
Route::post('/contact', 'SiteController@contactSubmit');
Route::get('/change/{lang?}', 'SiteController@changeLanguage')->name('lang');

Route::get('/cookie/accept', 'SiteController@cookieAccept')->name('cookie.accept');

Route::get('placeholder-image/{size}', [SiteController::class, 'placeholderImage'])->name('image.placeholder');

Route::get('/{slug}', 'SiteController@pages')->name('pages');
