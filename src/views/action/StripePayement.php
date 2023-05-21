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
     $cart_id = $cart->getId(); 
     $session = CheckoutSession::create([
            'mode'=>'payment', 
            'success_url'=>'http://localhost:8080/successful_payement',
            'cancel_url'=>'http://localhost:8080/canceled_payemnt',
            'billing_address_collection' => 'required',
            'shipping_address_collection' =>[
              'allowed_countries' => ['FR']
            ],
            'metadata'=>[
              'cart_id' =>$cart_id
            ],
     ]);
  }
}

?>