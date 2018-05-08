<?php

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

App::setLocale('it');
//Auth::routes();

    // Authentication Routes...
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');


    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Backend Routes...
Route::group(['middleware' => 'auth', 'prefix' => '/admin'], function() {
    // Link sidebar
    View::share('sidebar', [
        'admin' => ['name' => 'Dashboard', 'icon' => 'dashboard'],
        'admin.tables' => ['name' => 'Tabelloni', 'icon' => 'table']
    ]);

    Route::get('/', 'AdminController@index')->name('admin');
    Route::group(['prefix' => '/tables'], function() {
        Route::get('/', 'AdminController@tables')->name('admin.tables');
    });

    Route::post('/subscribers/delete/{id}', 'AdminController@deleteSubscriber')->name('admin.subscribers.delete');

    // Hidden mail preview
    Route::get('/mail', function () {
        $subscriber = App\Models\Subscriber::find(1);
        return new App\Mail\SubscriberConfirmation($subscriber);
    });
});


// Frontend Routes...

Route::get('/', 'TorneiController@index');
Route::post('/store', 'TorneiController@storeData')->name('subscriber.store');

