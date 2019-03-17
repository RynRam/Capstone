<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use App\Reservations;
use App\Venues;
use App\Payments;
use App\Contents;
use Illuminate\Support\Facades\Hash;
use Charts;
use Calendar;
use DB;
use Carbon\Carbon;
use App\Inventory;

class AdminController extends Controller
{
 
    public function login(Request $request){
    	

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'is_active' => 1,
        ]))
        {
            $user = User::where('email', $request->email)->first();
            if ($user->role('admin')) {
               return redirect('/admin/dashboard');
            }else if ($user->role('venue')) {
               return redirect('/admin/venue');
            }else if ($user->role('logistic')) {
               return redirect('/admin/inventory');
            }else if ($user->role('hr')) {
               return redirect('/admin/manpower');
            }else if ($user->role('reservation')) {
               return redirect('/admin/reservation');
            }else if ($user->role('sales')) {
               return redirect('/admin/sales');
            }else if ($user->role('audit')) {
               return redirect('/admin/audit');
            }else if ($user->role('account')) {
              return redirect('/admin/user');
            }else{
               return redirect('/admin')->with('flash_message_error','Invalid Email or Password');    
            }

        }
    return view('admin.admin_login');

    }


    public function dashboard(){
        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
        $events = Reservations::where('is_approved',1)->get();
        $event_list = [];
        foreach ($events as $key => $event) {
            $event_list[] = Calendar::event(
                $event->lname.' '.$event->category->name,
                true,
                new \DateTime($event->eventdate),
                new \DateTime($event->eventdate)
            );
        }
        $calendar_details = Calendar::addEvents($event_list); 

        $payments = Payments::whereDay('created_at', '=', date('d'))->sum('amount_payment');
        $reservationsCount = Reservations::where('is_approved',1)->count();
        $todaydate = date("Y-m-d");
        // // return $todaydate;
        $reservationsIncoming = Reservations::whereDate('eventdate', '>=', $todaydate)->where('is_approved',0)->count();
        $post = Contents::where('is_active', 1)->count();
        // // return  $reservationsCount;
        $usersCount = User::count();
        $venuesCount = Venues::where('is_active',1)->count();
        
        $reservationgraph = Reservations::whereYear('created_at', '=', date('Y'))->get();
        $chart = Charts::database($reservationgraph, 'bar', 'highcharts')
                  ->title("Reservations Details")
                  ->elementLabel("Total Reservations")
                  ->dimensions(1000, 500)
                  ->responsive(true)
                  ->groupByMonth(date('Y'), true);
        $paymentgraph = Payments::whereYear('created_at', '=', date('Y'))->get();
        $chartpayment = Charts::database($paymentgraph, 'line', 'highcharts')
                  ->title("Sales Details")
                  ->elementLabel("Total Sales")
                  ->dimensions(1000, 500)
                  ->responsive(true)
                  ->groupByMonth(date('Y'), true);
 
        
         // return $reservations; total count
        //  ,compact('','','','','','','','','')
         
        return view('admin.dashboard',compact('calendar_details','chart','chartpayment','venuesCount','usersCount','post','reservationsCount','reservationsIncoming','payments','alert'));
    }

    public function settings(){
        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
        return view('admin.settings',compact('alert'));
    }

    public function inventory(){
        $alert = Inventory::where('stock_on_hand', '<=', '80')->count();
        return view('admin.inventory',compact('alert'));
    }


    public function check_password(Request $request){
        $data = $request->all();
        $current_password = $data['current_pwd'];

        $check_password = User::where([Auth::user()->role_id])->first();
        if(Hash::check($current_password,$check_password->password)){
            echo "true"; die;
        }else{
            echo "false"; die;
        }
    }

    public function update_password(Request $request){
            $check_password = User::where(['email'=> Auth::user()->email])->first();
            $current_password = $request->current_pwd;
            if(Hash::check($current_password,$check_password->password)){
                $password = bcrypt($request->new_pwd);
                 $user_id = Auth::User()->id; 
                User::where('id',$user_id)->update(['password'=> $password]);
               return response()->redirectTo('admin/settings')->with('flash_message_success','Updated Successfully!');
            }else{
               return response()->redirectTo('admin/settings')->with('flash_message_error','Incorrect Current Password!');
            }

        }



    public function logout(){
        Auth::logout();
       return response()->redirectTo('/admin')->with('flash_message_success','Logged out Successfully');
    }
}
