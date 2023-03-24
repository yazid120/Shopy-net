<?php 
require_once '../actions/Db_Class_conn.php'; 
$session_stat = session_status(); 
if($session_stat == 1)
 session_start();

$connection = new Db_connect;


$sql ='SELECT * FROM `products`'; 


?>
<section class="container_products_article">
<div class="products_elments_sets">
    <img class="" src="http://localhost/Shopy-net/src/views/images/" />
    <p></p>
    <button class="add_cart_btn" id="">add to cart</button>
</div>
</section>