<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ManagementController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('./index');
});

// Route::get('/', [ManagementController::class, 'userIndex']);


// Route::get('/login/google',[LoginController::class,'redirectToProvider']);
 
// Route::get('/login/google/callback',[LoginController::class,'handleProviderCallback']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ------------------------    View route part    ------------------------------

Route::get('/pricing', function () {
    return view('./pricing/index');
});
Route::get('/about', function () {
    return view('./about/index');
});
Route::get('/telecom-services', function () {
    return view('./telecom-services/index');
});
Route::get('/web-design', function () {
    return view('./web-design/index');
});
Route::get('/digital-marketing', function () {
    return view('./digital-marketing/index');
});
Route::get('/blog', function () {
    return view('./blog/index');
});
Route::get('/contact', function () {
    return view('./contact/index');
});
Route::get('/it-training-programs-with-job-opportunity', function () {
    return view('./it-training-programs-with-job-opportunity/index');
});
Route::get('/diy-web-design-vs-hiring-a-web-design-agency', function () {
    return view('./diy-web-design-vs-hiring-a-web-design-agency/index');
});
Route::get('/reasons-your-business-needs-website', function () {
    return view('./reasons-your-business-needs-website/index');
});
Route::get('/5-marketing-mistakes-small-businesses-should-avoid', function () {
    return view('./5-marketing-mistakes-small-businesses-should-avoid/index');
});

// -----------------------
// Auth::routes();
// Route::get('/login')

// --------------------    Admin route part  ---------------------------

Route::prefix('admin')->group(function () {
    Route::get('/login', function () {
        return view('./admin/login');
    });
   
    // Route::get('/dashboard', function () {
    //     return view('./admin/management');
    // });

    Route::post('/login', [ManagementController::class, 'login']);

    Route::get('/dashboard', [ManagementController::class, 'index']);

    Route::post('/user_store', [ManagementController::class, 'user_store']);

    Route::post('/user_view', [ManagementController::class, 'user_view']);
    
    Route::post('/user_edit', [ManagementController::class, 'user_edit']);

    Route::post('/user_delete', [ManagementController::class, 'user_delete']);


    Route::post('/post_store', [ManagementController::class, 'post_store']);

    Route::post('/post_view', [ManagementController::class, 'post_view']);
    
    Route::post('/post_edit', [ManagementController::class, 'post_edit']);

    Route::post('/post_delete', [ManagementController::class, 'post_delete']);


    Route::post('/menu_store', [ManagementController::class, 'menu_store']);
    
    Route::post('/menu_view', [ManagementController::class, 'menu_view']);

    Route::post('/menu_edit', [ManagementController::class, 'menu_edit']);

    Route::post('/menu_delete', [ManagementController::class, 'menu_delete']);


    Route::post('/service_store', [ManagementController::class, 'service_store']);

    Route::post('/service_view', [ManagementController::class, 'service_view']);

    Route::post('/service_edit', [ManagementController::class, 'service_edit']);

    Route::post('/service_delete', [ManagementController::class, 'service_delete']);


    Route::post('/review_store', [ManagementController::class, 'review_store']);
    
    Route::post('/review_view', [ManagementController::class, 'review_view']);

    Route::post('/review_edit', [ManagementController::class, 'review_edit']);

    Route::post('/review_delete', [ManagementController::class, 'review_delete']);

    
    Route::post('/contact_store', [ManagementController::class, 'contact_store']);

    Route::post('/contact_view', [ManagementController::class, 'contact_view']);

    Route::post('/contact_edit', [ManagementController::class, 'contact_edit']);

    Route::post('/contact_delete', [ManagementController::class, 'contact_delete']);
});