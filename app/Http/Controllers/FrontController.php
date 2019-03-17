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
use Auth;
use PDF;
use App\Staffs;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
class FrontController extends Controller
{
    public function getIndex(){
       $discounts = Discounts::where('is_active',1)->get();
	    return view('front.home',compact('discounts'));
    }
    public function getCatering(){
        $events= Reservations::where('is_approved',1)->get();
        $event_list = [];
        foreach ($events as $key => $event) {
            $event_list[] = Calendar::event(
                $event->customer->fname.' '.$event->category->name,
                true,
                new \DateTime($event->eventdate),
                new \DateTime($event->eventdate)
            );
        }
        $calendar_details = Calendar::addEvents($event_list); 
 
    	$catering = Caterings::where('event_categories_id',1)->get();
    	$venue = Venues::where('is_active',1)->take(12)->get();
    	$package = Packages::where('is_active',1)->where('event_categories_id','1')->get();
        $food = Packages::where('is_active',1)->take(12)->get();
        $location = Venues::where('is_active',1)->take(12)->get();

	    return view('front.catering',compact('catering','venue','package','food','location','calendar_details'));
    }

    public function getDebut(){
        $events = Reservations::where('is_approved',1)->get();
        $event_list = [];
        foreach ($events as $key => $event) {
            $event_list[] = Calendar::event(
                $event->customer->fname.' '.$event->category->name,
                true,
                new \DateTime($event->eventdate),
                new \DateTime($event->eventdate)
            );
        }
        $calendar_details = Calendar::addEvents($event_list); 
 
        $catering = Caterings::where('event_categories_id',2)->get();
        $venue = Venues::where('is_active',1)->take(12)->get();
              $package = Packages::where('is_active',1)->where('event_categories_id','2')->get();
        $location = Venues::where('is_active',1)->take(12)->get();
        return view('front.debut',compact('catering','venue','package','location','calendar_details'));
    }

    public function getWedding(){
        $events = Reservations::where('is_approved',1)->get();
        $event_list = [];
        foreach ($events as $key => $event) {
            $event_list[] = Calendar::event(
                $event->customer->fname.' '.$event->category->name,
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
        return view('front.wedding',compact('catering','venue','package','location','calendar_details'));
    }

    public function postCatering(Request $request){

        // After Step 1
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AWbHet5U6VqpDjQ37uksQ7CFs7VlLfu6Hto088Mmf1xO_LOgRbnJhagtXmUjr1FYa5dDjDJlSucsa3Qi',     // ClientID
                'EJppNfTRlTRN4oKCJAfsWcA5ho2yz144RwcvS7Ws6ixn2KVZ5MYwaEPIfMTKAbbC-iIjIYu8DREKRIqY'      // ClientSecret
            )
        );

        $payer = new Payer();
        $payer->setPaymentMethod("paypal"); 

        $item1 = new Item();
        $item1->setName('Initial Payment for Reservation')
                ->setCurrency('PHP')
                ->setQuantity(1)
                ->setSku("123123") // Similar to `item_number` in Classic API
                ->setPrice(1.0);
      
        $this->validate($request,[
            'venuename' => 'required',
            'package' => 'required',
            'schedule' => 'required',
            'category' => 'required',
            'people' => 'required',
            'g-recaptcha-response'=> 'required',
        ]);
        $reservations = new Reservations;   
        $reservations->package_id = $request->package; 
        $reservations->guest = $request->people;
        Session::put('reservation', [
            'customers_id' => $request->customer,
            'venuename' => $request->venuename,
            'package_id' => $request->package,
            'eventdate' => $request->schedule,
            'category_id' => $request->category,
            'guest' => $request->people,
            'total' => $request->total_price
            ]); 
            
        $itemList = new ItemList();
        $itemList->setItems(array($item1));

        $details = new Details();
        $details->setShipping(4998.0)
                ->setTax(1.0)
                ->setSubtotal(1.0);

        $amount = new Amount();
        $amount->setCurrency("PHP")
                ->setTotal(5000.00)
                ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
                ->setItemList($itemList)
                ->setDescription("Payment description")
                ->setInvoiceNumber(uniqid());

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("https://lynagailscaters.herokuapp.com/execute-payment")
                ->setCancelUrl("https://lynagailscaters.herokuapp.com/basic-catering");

        $payment = new Payment();
        $payment->setIntent("sale")
                ->setPayer($payer)
                ->setRedirectUrls($redirectUrls)
                ->setTransactions(array($transaction));

        $payment->create($apiContext);
        

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

                return response()->redirectTo($payment->getApprovalLink());
                
            }else{
                Session::flash('error','You are probably a robot!');
                return response()->redirectTo('/basic-catering');
            }

        }else{ 
            return response()->redirectTo('/basic-catering');
        }
       
     
      

    }

    public function reserved(){
        $reserve = Reservations::where('is_approved',1)->get();
        // $staffs = Staffs::all();
        return ($reserve);
    }
    public function reservedpackage(){
        $package = Packages::all();
     
        // $staffs = Staffs::all();
        return ($package);
    }
    public function reservedvenue(){
        
        $venue = Venues::all();
        // $staffs = Staffs::all();
        return ($venue);
    }
    public function receipt(){
       
        $reservation = Reservations::where('customers_id', Auth::guard('customer')->user()->id)->get()->last();
        // return $reservation;
        return view('front.receipt',compact('reservation'));
    }
    public function report(){
       
        $pdf = \App::make('dompdf.wrapper');
        $reservation = Reservations::where('customers_id', Auth::guard('customer')->user()->id)->get()->last();
       $pdf->loadView('front.report',compact('reservation'));
       return $pdf->stream();

    }
    public function menuA(){
        $packages = Packages::select('price')->where('event_categories_id','3')->where('name','Package B')->pluck('price');
        return view('front.classA',compact('packages'));
    }

    public function menuB(){
        $packages = Packages::select('price')->where('event_categories_id','3')->where('name','Package A')->pluck('price');
        return view('front.classB',compact('packages'));
    }
    public function menuC(){
        $packages = Packages::select('price')->where('event_categories_id','3')->where('name','Package C')->pluck('price');
        return view('front.classC',compact('packages'));
    }
    public function debutA(){
        $packages = Packages::select('price')->where('event_categories_id','2')->where('name','Package B')->pluck('price');
        return view('front.debutA',compact('packages'));
    }
    public function debutB(){
        $packages = Packages::select('price')->where('event_categories_id','2')->where('name','Package A')->pluck('price');
        return view('front.debutB',compact('packages'));
    }
    public function debutC(){
        $packages = Packages::select('price')->where('event_categories_id','2')->where('name','Package C')->pluck('price');
        return view('front.debutC',compact('packages'));
    }
    public function blog(){
        $posts = Contents::where('is_active', 1)->get();
        return view('front.blog',compact('posts'));
    }
    public function terms(){
        return view('front.terms');
    }
    public function privacy(){
        return view('front.privacy');
    }


}
