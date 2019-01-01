<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\Payment;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

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

        $details->setShipping(1.2)
                ->setTax(1.3)
                ->setSubtotal(4997.50);

        $amount->setCurrency('PHP');
        $amount->setTotal(5000);
        $amount->setDetails($details);
        $transaction->setAmount($amount);

        $execution->addTransaction($transaction);

        $result = $payment->execute($execution, $apiContext);
        
        return redirect()->back();
       
 
    }
}
