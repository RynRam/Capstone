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
	Route::get('/cateringA', 'FrontController@cateringA');
	Route::get('/cateringB', 'FrontController@cateringB');
	Route::get('/cateringC', 'FrontController@cateringC');
	Route::get('/debutA', 'FrontController@debutA');
	Route::get('/debutB', 'FrontController@debutB');
	Route::get('/debutC', 'FrontController@debutC');
	Route::get('/blog', 'FrontController@blog');
	Route::get('/terms&condition', 'FrontController@terms');
	Route::get('/privacy&policy', 'FrontController@privacy');
	Route::get('/receipt', 'FrontController@receipt');
	Route::get('/receipt/report', 'FrontController@report');
	Route::get('/reserved', 'FrontController@reserved');
	Route::get('/reservedpackage', 'FrontController@reservedpackage');
	Route::get('/reservedvenue', 'FrontController@reservedvenue');

		//Customer Account
	Route::resource('/customer-register','CustomerRegisterController');
	Route::post('/customer-register','CustomerRegisterController@store');
	Route::get('/execute-payment','CustomerPaymentController@execute');
	// Route::post('/customer-login', 'CustomersLoginController@logout');
	// Route::get('/customer-login', 'CustomersLoginController@showLoginForm');
	// Route::post('/', 'CustomersLoginController@login');	
	Route::group(['prefix' => 'customer'], function ()
    {
	Route::post('password/email','Auth\CustomerForgotPasswordController@sendResetLinkEmail')->name('customer.password.email');
	Route::get('password/reset','Auth\CustomerForgotPasswordController@showLinkRequestForm')->name('customer.password.request');
	Route::post('password/reset','Auth\CustomerResetPasswordController@reset');
	Route::get('password/reset/{token}','Auth\CustomerResetPasswordController@showResetForm')->name('customer.password.reset');
});

	Route::resource('/customer-login','CustomerLoginController');

	Route::get('/customer-profile/{id}/edit','CustomerProfileController@edit');
	Route::put('/customer-profile/{id}','CustomerProfileController@update');
	// Route::get('/customer-login','CustomerLoginController@create')->name('customer.login');
	Route::get('/verify', 'CustomerRegisterController@verifyFirst');
	Route::post('send-email', 'CustomerRegisterController@sendEmail');
	Route::get('/verifyDone', 'CustomerRegisterController@verifyDone');
	Route::get('verify/{email}/{verification_token}','CustomerRegisterController@sendEmailDone')->name('sendEmailDone');
	
	
	//Admin Login
	Route::match(['get','post'],'/admin', 'AdminController@login')->middleware('adminauth');

	Auth::routes();
	// Route::post('logout', 'Auth\LoginController@logout')->name('logout');
	// // Password Reset Routes...
	// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
	// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
	// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
	// Route::post('password/reset', 'Auth\ResetPasswordController@reset');


	Route::get('/home', 'HomeController@index')->name('home');



	Route::get('/admin/dashboard', 'AdminController@dashboard')->middleware('auth');
	Route::get('/admin/settings', 'AdminController@settings')->middleware('auth');
	//CMS
	Route::resource('/admin/post','CMSController');

	//Inventory
	Route::resource('/admin/inventory','InventoryController');
	Route::get('/admin/Inventorypdf','InventoryController@pdf');
	Route::get('/admin/inventory/{inventory}/edit', 'InventoryController@edit');
	Route::get('/admin/inventory/create', 'InventoryController@create');
	Route::get('/admin/InventoryDamage','InventoryController@dmg');
	Route::get('/admin/InventoryDefect','InventoryController@dft');
	Route::put('/admin/inventory/{inventory}','InventoryController@update');
	Route::patch('/admin/inventory/{inventory}','InventoryController@updateStatus');

	//Critical Inventory
	Route::resource('/admin/inventory-critical','CriticalStockController');

	
	//Inventory Category
	Route::resource('/admin/inventory-category','InventoryCategoryController');
	Route::get('/admin/inventory-category/create', 'InventoryCategoryController@create');
	Route::get('/admin/inventory-category/{inventory-category}/edit', 'InventoryCategoryController@edit');
	Route::put('/admin/inventory-category/{inventory-category}', 'InventoryCategoryController@update');	
	Route::patch('/admin/inventory-category/{inventory_category}', 'InventoryCategoryController@updateStatus');

	//Inventory Warehouse
	Route::resource('/admin/warehouse','WarehouseController');

	//Reservations
	Route::resource('/admin/reservation','ReservationController');
	Route::get('/admin/reservationpdf','ReservationController@pdf');
	Route::post('/admin/reservationseventdate','ReservationController@eventdate');
	Route::get('/admin/reservationseventdatepdf','ReservationController@eventdatepdf');
	// Route::get('/admin/reserveDatePDF','ReservationController@reserveDatePDF');
	Route::put('/admin/reservation/{reservation}', 'ReservationController@updateStatus');


	//Food Package
	Route::resource('/admin/food','FoodController');
	Route::get('/admin/Packagepdf','FoodController@pdf');
	Route::get('/admin/food/create', 'FoodController@create')->name('Create New Package');
	Route::get('/admin/food/{food}/edit', 'FoodController@edit')->name('Update Package');
	Route::patch('/admin/food/{food}', 'FoodController@updateStatus'); 
	Route::put('/admin/food/{food}', 'FoodController@update');

	//Catering
	Route::resource('/admin/category','CategoryController');
	Route::post('/admin/category','CategoryController@store');

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
	Route::put('/admin/venue/{venue}', 'VenueController@update'); 
	
	//Manpower
	Route::resource('/admin/manpower','ManpowerController');
	Route::get('/admin/manpower/create', 'ManpowerController@create');
	Route::get('/admin/manpower/{manpower}/edit', 'ManpowerController@edit');
	Route::patch('/admin/manpower/{manpower}', 'ManpowerController@updateStatus');
	Route::put('/admin/manpower/{manpower}', 'ManpowerController@update');

	Route::resource('/admin/manpowerroles','ManpowerRolesController');
	Route::patch('/admin/manpowerroles/{manpowerrole}', 'ManpowerRolesController@updateStatus');
	Route::get('/admin/manpowerReserve1pdf','ManpowerController@pdf');
	Route::get('/admin/manpowerReserve2pdf','ManpowerController@pdfreserve');
	//Audit
	Route::resource('/admin/audit','AuditController');
	//Sales
	Route::resource('/admin/sales','SalesController');
	Route::get('/admin/salespdf','SalesController@pdf');
	Route::post('/admin/salescategory','SalesController@category');
	Route::get('/admin/salescategorypdf','SalesController@categorypdf');
	//Discount
	Route::resource('/admin/discount','DiscountController');
	Route::put('/admin/discount/{discount}', 'DiscountController@update'); 
	Route::patch('/admin/discount/{discount}', 'DiscountController@updateStatus'); 
	//Payment
	Route::resource('/admin/payment','PaymentController');
	Route::get('/admin/Paymentpdf','PaymentController@pdf');
	//Customer
	Route::resource('/admin/customers','AdminCustomerController');
	Route::get('/admin/customerspdf','AdminCustomerController@pdf');
Route::get('/logout', 'AdminController@logout')->middleware('auth');
