<?php 

namespace app;

use Stripe\BillingPortal\Session;
use Stripe\Checkout\Session as CheckoutSession;
use Stripe\Stripe;

class PayementStripe{
   
  public function __construct(readonly private string $clientSecret)
  {
    Stripe::setApiKey($this->clientSecret);
    Stripe::setApiVersion('2022-11-15'); 

  }

  public function StartPayement($cart){
     $session = CheckoutSession::create([
            'mode'=>'payement', 
            'success_url'=>'http://localhost:8080/successful_payement',
            'cancel_url'=>'http://localhost:8080/canceled_payemnt'
     ]);
  }
}

?>