<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as'=>'home','uses'=>function () {
    return view('website.index');
//	return redirect()->route('login');
}]);
//
//Route::get('/dashboard', function () {
//    return view('Dashboard.index')->with('user',Auth::user());
//});

// Authentication routes...
Route::get('auth/login', ['uses'=>'Auth\AuthController@getLogin','as'=>'login']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');



Route::group(['middleware' => 'auth'], function()
{
    // Registration routes...
//    Route::get('auth/register', function () {
//        return view('auth.register');
//    });
    Route::post('auth/register', 'Auth\AuthController@postRegisterN');
    Route::get('auth/register', 'Auth\AuthController@getRegister');

//Dashboard Routes
    //index
    Route::get('dashboard',['as'=>'dashboard','uses'=>'DashboardController@index']);

    //New Report route
    Route::get('dashboard/reports/new','DashboardController@new_form_choose');

    //New Report route
    Route::get('dashboard/reports/edit','DashboardController@edit_form_choose');
    
    //Submit Report route
    Route::get('dashboard/reports/submit','DashboardController@submit_form');

    //Browse Report route
    Route::get('dashboard/reports/browse',['as'=>'browse','uses'=>'DashboardController@browse']);

    //Browse Detailed Report route
    Route::get('dashboard/reports/detailed','DashboardController@detailed');

    //Browse Report route
    Route::post('dashboard/reports/browse','DashboardController@browse_filter');

    //Browse Detailed Report route
    Route::post('dashboard/reports/detailed','DashboardController@detailed_filter');

    //Browse Report route
    Route::get('dashboard/reports/print','DashboardController@report_print');

    //Show Report before printing route
    Route::get('dashboard/reports/view','DashboardController@report_view');

    //Submit Report route
    Route::get('dashboard/reports/edit/submit','DashboardController@submit_edit_form');

    //Submit Report route
    Route::get('dashboard/reports/delete','DashboardController@delete_form');

});
