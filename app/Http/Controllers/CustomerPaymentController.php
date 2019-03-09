<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\Payment;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use Session;
use App\Reservations;
class CustomerPaymentController extends Controller
{
    public function execute(){
        
        // After Step 1
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AWbHet5U6VqpDjQ37uksQ7CFs7VlLfu6Hto088Mmf1xO_LOgRbnJhagtXmUjr1FYa5dDjDJlSucsa3Qi',     // ClientID
                'EJppNfTRlTRN4oKCJAfsWcA5ho2yz144RwcvS7Ws6ixn2KVZ5MYwaEPIfMTKAbbC-iIjIYu8DREKRIqY'      // ClientSecret
            )
        );
        $paymentId = request('paymentId');
        $payment = Payment::get($paymentId, $apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId(request('PayerID'));

        $transaction = new Transaction();
        $amount = new Amount();
        $details = new Details();

        $details->setShipping(4998.0)
                ->setTax(1.0)
                ->setSubtotal(1.0);

        $amount->setCurrency('PHP');
        $amount->setTotal(5000.00);
        $amount->setDetails($details);
        $transaction->setAmount($amount);

        $result = request()->session()->get('reservation');
        
        $reservations = new Reservations;   
            $reservations->customers_id = Session::get('reservation')['customers_id'];
            $reservations->venues_id =    Session::get('reservation')['venuename'];
            $reservations->package_id =   Session::get('reservation')['package_id'];
            $reservations->eventdate =    Session::get('reservation')['eventdate'];
            $reservations->category_id =  Session::get('reservation')['category_id'];
            $reservations->guest =        Session::get('reservation')['guest'];
            $reservations->total =        Session::get('reservation')['total'];
    
            $reservations->save();


        $execution->addTransaction($transaction);

        $result = $payment->execute($execution, $apiContext);
        
        return response()->redirectTo('receipt');
       
 
    }
}
