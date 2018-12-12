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
	//Customer Pages
	Route::get('/', 'FrontController@getIndex');
	Route::get('/basic-catering', 'FrontController@getCatering');
	Route::post('/basic-catering','FrontController@postCatering');
	Route::get('/debut', 'FrontController@getDebut');
	Route::get('/wedding', 'FrontController@getWedding');
	Route::get('/classA', 'FrontController@menuA');
	Route::get('/classB', 'FrontController@menuB');
	Route::get('/classC', 'FrontController@menuC');
	Route::get('/debutA', 'FrontController@debutA');
	Route::get('/debutB', 'FrontController@debutB');
	Route::get('/debutC', 'FrontController@debutC');
	Route::get('/blog', 'FrontController@blog');
	Route::get('/terms&condition', 'FrontController@terms');
	
		//Customer Account
	Route::resource('/customer-register','CustomerRegisterController');
	
	// Route::post('/customer-login', 'CustomersLoginController@logout');
	// Route::get('/customer-login', 'CustomersLoginController@showLoginForm');
	// Route::post('/', 'CustomersLoginController@login');

	Route::resource('/customer-login','CustomerLoginController');
	// Route::get('/customer-login','CustomerLoginController@create')->name('customer.login');
	Route::get('/verify', 'CustomerRegisterController@verifyFirst');
	Route::get('/verifyDone', 'CustomerRegisterController@verifyDone');
	Route::get('verify/{email}/{verification_token}','CustomerRegisterController@sendEmailDone')->name('sendEmailDone');
	//Admin Login
	Route::match(['get','post'],'/admin', 'AdminController@login');

	Auth::routes();


	Route::get('/home', 'HomeController@index')->name('home');



	Route::get('/admin/dashboard', 'AdminController@dashboard')->middleware('auth');
	Route::get('/admin/settings', 'AdminController@settings')->middleware('auth');
	//Inventory Category
	Route::resource('/admin/post','CMSController');
	//Inventory
	Route::resource('/admin/inventory','InventoryController');
	Route::get('/admin/Inventorypdf','InventoryController@pdf');
		Route::get('/admin/InventoryDamage','InventoryController@dmg');
	Route::get('/admin/InventoryDefect','InventoryController@dft');

	Route::put('/admin/inventory/{inventory}','InventoryController@update');
	Route::patch('/admin/inventory/{inventory}','InventoryController@updateStatus');

	//Inventory Category
	Route::resource('/admin/inventory-category','InventoryCategoryController');
	Route::patch('/admin/inventory-category/{inventory_category}', 'InventoryCategoryController@updateStatus');
	//Inventory Warehouse
	Route::resource('/admin/warehouse','WarehouseController');
	//Reservations
	Route::resource('/admin/reservation','ReservationController');
	Route::put('/admin/reservation/{reservation}', 'ReservationController@updateStatus');

	//Food Package
	Route::resource('/admin/food','FoodController');
	Route::get('/admin/Packagepdf','FoodController@pdf');
	Route::get('/admin/food/create', 'FoodController@create')->name('Create New Package');
	Route::get('/admin/food/{food}/edit', 'FoodController@edit')->name('Update Package');
	Route::patch('/admin/food/{food}', 'FoodController@updateStatus'); 
	//Catering
	Route::resource('/admin/category','CategoryController');
	//Users
	Route::resource('/admin/user','UserController');
	Route::patch('/admin/user/{user}', 'UserController@updateStatus'); 
	//Admin
	Route::get('/admin/check-pwd','AdminController@check_password');
	Route::match(['get','post'],'/admin/update-pwd','AdminController@update_password');
	//Venue
	Route::resource('/admin/venue','VenueController');
	Route::get('/admin/Venuepdf','VenueController@pdf');
	Route::patch('/admin/venue/{venue}', 'VenueController@updateStatus'); 
	//Manpower
	Route::resource('/admin/manpower','ManpowerController');
	Route::resource('/admin/manpower/roles','ManpowerRolesController');
	Route::patch('/admin/manpower/{manpower}', 'ManpowerController@updateStatus'); 
	Route::get('/admin/manpowerReserve1pdf','ManpowerController@pdf');
	Route::get('/admin/manpowerReserve2pdf','ManpowerController@pdfreserve');
	//Audit
	Route::resource('/admin/audit','AuditController');
	//Sales
	Route::resource('/admin/sales','SalesController');
	//Discount
	Route::resource('/admin/discount','DiscountController');
	Route::patch('/admin/discount/{discount}', 'DiscountController@updateStatus'); 
	//Payment
	Route::resource('/admin/payment','PaymentController');
	Route::get('/admin/Paymentpdf','PaymentController@pdf');
Route::get('/logout', 'AdminController@logout')->middleware('auth');
