<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customers;
//Class needed for login and Logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//Auth facade
use Auth;
class CustomersLoginController extends Controller
{
       /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';
       public function __construct()
       {
           $this->middleware('guest:admin')->except('logout');
       }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        //Shows customer login form
   public function showLoginForm()
   {
       return view('front.login');
   }
   public function login(Request $request)
   {
       $customer = new Customers;
       $this->validate($request,[
           'email' => 'required',
           'password' => 'required',
       ]);

        // Attempt to log the user in
      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password,'is_verified'=>'1'])) {
        // if successful, then redirect to their intended location
        return redirect('/');
      }
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('front.login');
    }
}
