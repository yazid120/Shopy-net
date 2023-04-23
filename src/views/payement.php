<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

?>
<body>
    <script type="text/javascript">
       let payement_Object = [
        {head :'payment methods'}
       ]; 
    </script>
    <h1>payement page</h1>
    <img src="http://localhost/Shopy-net/src/views/images/mastercard.png"/>
    <img src="http://localhost/Shopy-net/src/views/images/paypal.png"/>
    <img src="http://localhost/Shopy-net/src/views/images/paysera.png"/>
    
</body>