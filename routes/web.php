<?php

use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\backend\BookingController;
use App\Http\Controllers\backend\CatagoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/', App\Http\Controllers\frontend\HomeController::class);
Route::get('/event', [App\Http\Controllers\frontend\eventShowController::class, 'event'])->name('event');
Route::get('/event_single/{id?}', [App\Http\Controllers\frontend\eventShowController::class, 'show'])->name('event_single');
Route::get('/speaker/{sid?}', [App\Http\Controllers\frontend\eventShowController::class, 'speaker'])->name('speaker');
Route::get('/about',[App\Http\Controllers\frontend\eventShowController::class, 'about'])->name('about');

Route::get('/contact', [App\Http\Controllers\frontend\eventShowController::class, 'contact'])->name('contact');
Route::post('/contact', [App\Http\Controllers\frontend\eventShowController::class, 'store'])->name('contact.store');


// Route::get('/', function () {
//     return view('welcome');
// });

//admin dashboard
Route::get('/admin/dashboard', function () {
    return view('backend.admin_dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin_dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//admin routing;
Route::middleware('guest:admin')->prefix('admin')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'login'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'check_user']);

    // Route::get('register', [App\Http\Controllers\Auth\Admin\RegisterController::class, 'create'])->name('admin.register');
    // Route::post('register', [App\Http\Controllers\Auth\Admin\RegisterController::class, 'store']);
   

});

Route::middleware('auth:admin')->prefix('admin')->group( function () {
    Route::resource('/booking', App\Http\Controllers\backend\BookingController::class);
    Route::get('/booking/status/{id}', [BookingController::class, 'changeStatus'])->name('changeStatus');
    Route::resource('/blog', App\Http\Controllers\backend\BlogController::class);
    Route::resource('/testimonial', App\Http\Controllers\backend\TestimonialController::class);
    Route::resource('/event', App\Http\Controllers\backend\EventController::class);
    Route::resource('/speaker', App\Http\Controllers\backend\SpeakerController::class);
    Route::resource('/organiser', App\Http\Controllers\backend\OrganiserController::class);
    Route::resource('/message', App\Http\Controllers\backend\MessageController::class);
    Route::resource('/events/city', App\Http\Controllers\backend\CityController::class);
    Route::resource('/attendee', App\Http\Controllers\backend\AttendeeController::class);
    Route::resource('/employee', App\Http\Controllers\backend\EmployeeController::class);
    Route::resource('/events/country', App\Http\Controllers\backend\CountryController::class);
    // Route::resource('/general_admin', App\Http\Controllers\Auth\Admin\RegisterController::class);
    Route::resource('/general_admin', App\Http\Controllers\backend\AdminController::class);
    Route::post('logout', [App\Http\Controllers\Auth\Admin\LoginController::class, 'logout'])->name('admin.logout');

    Route::view('/dashboard','backend.admin_dashboard');
    //catagory route
    Route::resource('/catagory',CatagoryController::class);

});

//attendee routing;

Route::middleware('guest:attendee')->prefix('attendee')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Attendee\LoginController::class, 'create'])->name('attendee.login');
    Route::post('login', [App\Http\Controllers\Auth\Attendee\LoginController::class, 'store']);

    Route::get('register', [App\Http\Controllers\Auth\Attendee\RegisterController::class, 'create'])->name('attendee.register');
    Route::post('register', [App\Http\Controllers\Auth\Attendee\RegisterController::class, 'store']);
});

Route::middleware('auth:attendee')->prefix('attendee')->group( function () {

    Route::post('logout', [App\Http\Controllers\Auth\Attendee\LoginController::class, 'destroy'])->name('attendee.logout');

    Route::view('/dashboard','backend.attendee_dashboard');

});