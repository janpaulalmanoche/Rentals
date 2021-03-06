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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); 
Route::namespace ('Admin')-> prefix ('admin')-> name('admin.')->middleware('can:manage-users') -> group (function(){
Route::resource('/users',  'UsersController', ['except' => ['show', 'create', 'store']]);

    
});

Route::group(['middleware' => ['auth']], function () {




Route::get('/tenant','Admin\TenantController@index');//tenant
Route::get('/registerTenant','Admin\TenantController@create');
Route::post('/addTenant','Admin\TenantController@store');
Route::get('/edittenant/{id}','Admin\TenantController@edit'); 
Route::put('/updatetenant/{id}','Admin\TenantController@update');
Route::delete('delete-tenant/{id}','Admin\TenantController@delete');

// room
Route::get('/room','Admin\RoomController@index');
Route::get('/insertRoom','Admin\RoomController@create');
Route::post('/addRoom','Admin\RoomController@store');
Route::get('/editroom/{id}','Admin\RoomController@edit'); 
Route::put('/updateroom/{id}','Admin\RoomController@update');

Route::get('/book','Admin\BookController@index');//book
Route::get('/addBooking','Admin\BookController@create');


//dropdown
Route::get('/booking','BookingController@index');
Route::get('/getBookings/{id}','BookingController@getBookings');

//dashboard
Route::get('/dashboard','DashboardController@index');

//room controller
// Route::get('/room','RoomController@index');

/// sample

Route::get('/dynamic_dependent', 'DynamicDependent@index');
Route::post('dynamic_dependent/fetch', 'DynamicDependent@fetch')->name('dynamicdependent.fetch');
    
Route::get('/rooms','RoomsController@index');

//booked a room
Route::get('/room-booked/{id}','RoomsController@booked');
Route::post('/store-booked','RoomsController@store');

//list of booked rooms only active
Route::get('/booked-rooms','RoomsController@booked_rooms');
//inactive booked rooms
Route::get('/booked-rooms-inactive','RoomsController@inactive_booked_rooms');
//details of active booked rooms
Route::get('/booked-room/{id}','RoomsController@booked_room_booking_details');
//mark paid booking billibng
Route::get('/pay-billing/{id}','RoomsController@pay_billing');
//set booking to inactive
Route::get('/booking-inactive/{id}','RoomsController@set_booking_inactive');

//tenant history
    Route::get('my-billings','BillingController@index');


//create a user. admin. or tenant
Route::get('/user-create','UserController@create');
Route::post('/user-store','UserController@store');

Route::get('/test','RoomsController@test');

});
//dynamic room
// ss
?>