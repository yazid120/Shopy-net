<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

include_once './views/composent/header.php';

?>
<body>
    <script type="text/javascript">
       let payement_Object = [
        {head :'payment methods'}
       ]; 
    </script>
    <div class="root_page">
    <p><a href="/">Home</a> > <a>Checkout</a></p>
    </div>

 <div class="container">
    <form action="">
        <div class="row">
            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="john deo">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="mumbai">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="Algeria">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456">
                    </div>
                </div>
            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="http://localhost/Shopy-net/src/views/images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr. john deo">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234">
                    </div>
                </div>

            </div>
    </div>
        <input type="submit" value="proceed to checkout" class="submit-btn">
    </form>

</div>    


    <img src="http://localhost/Shopy-net/src/views/images/mastercard.png"/>
    <img src="http://localhost/Shopy-net/src/views/images/paypal.png"/>
    <img src="http://localhost/Shopy-net/src/views/images/paysera.png"/>
    
</body>