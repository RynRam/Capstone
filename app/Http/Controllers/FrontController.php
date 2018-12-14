<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caterings;
use App\Contents;
use App\Venues;
use App\Customers;
use App\Packages;
use App\Reservations;
use App\Reserves;
use App\Discounts;
use Calendar;
use Session;
use GuzzleHttp\Client;
class FrontController extends Controller
{
    public function getIndex(){
        $discounts = Discounts::where('is_active',1)->get();
	    return view('front.home',compact('discounts'));
    }
    public function getCatering(){
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
 
    	$catering = Caterings::where('event_categories_id',2)->get();
    	$venue = Venues::where('is_active',1)->take(12)->get();
    	$package = Packages::where('is_active',1)->where('event_categories_id','2')->get();
        $food = Packages::where('is_active',1)->take(12)->get();
        $location = Venues::where('is_active',1)->take(12)->get();

	    return view('front.catering',compact('catering','venue','package','food','location','calendar_details'));
    }

    public function getDebut(){
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
 
        $catering = Caterings::where('event_categories_id',1)->get();
        $venue = Venues::where('is_active',1)->take(12)->get();
              $package = Packages::where('is_active',1)->where('event_categories_id','1')->get();
        $location = Venues::where('is_active',1)->take(12)->get();
        return view('front.debut',compact('catering','venue','package','food','location','calendar_details'));
    }

    public function getWedding(){
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
 
        $catering = Caterings::where('event_categories_id',3)->get();
        $venue = Venues::where('is_active',1)->take(12)->get();
        $package = Packages::where('is_active',1)->where('event_categories_id','3')->get();
        $location = Venues::where('is_active',1)->take(12)->get();
        return view('front.wedding',compact('catering','venue','package','food','location','calendar_details'));
    }

    public function postCatering(Request $request){
        $reservations = new Reservations;
        $this->validate($request,[
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'contact' => 'required|size:11',
            'address' => 'required',
            'venuename' => 'required',
            'package' => 'required',
            'schedule' => 'required',
            'category' => 'required',
            'people' => 'required',
            'g-recaptcha-response'=> 'required',
        ]);
        $reservations->fname = $request->fname;
        $reservations->lname = $request->lname;
        $reservations->email = $request->email;
        $reservations->contact = $request->contact;
        $reservations->address = $request->address;
        $reservations->venuename = $request->venuename;
        $reservations->package_id = $request->package;
        $reservations->eventdate = $request->schedule;
        $reservations->category_id = $request->category;
        $reservations->guest = $request->people;
        $reservations->total = ($reservations->guest * $reservations->package->price);
        $token = $request->input('g-recaptcha-response');
        if ($token > 0){
            $client = new Client();
            $response = $client->post('https://www.google.com/recaptcha/api/siteverify',[
            'form_params' => array(
                'secret' => '6LdhPIEUAAAAAAT2upoo9qyMTsrs3X-t_Ttv2udc',
                'response' => $token
            )
            ]);
            $result = json_decode($response->getBody()->getContents());
            if($result->success){
                $reservations->save();
                Session::flash('status','reservation sent!');
                return redirect()->back();
            }else{
                Session::flash('error','You are probably a robot!');
                return redirect()->back();
            }

        }else{ 
            return redirect()->back();
        }
       
     
      

    }


    public function menuA(){
        return view('front.classA');
    }
    public function menuB(){
        return view('front.classB');
    }
    public function menuC(){
        return view('front.classC');
    }
    public function debutA(){
        return view('front.debutA');
    }
    public function debutB(){
        return view('front.debutB');
    }
    public function debutC(){
        return view('front.debutC');
    }
    public function blog(){
        $posts = Contents::where('is_active', 1)->get();
        return view('front.blog',compact('posts'));
    }
    public function terms(){
        return view('front.terms');
    }


}
