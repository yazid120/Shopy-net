<?PHP  
include_once './views/composent/header.php';
$sub_module = 'bienvenu sur shopy net';

?>
<section class="main_section_shopyNet_Home">
<?='<h1>'.$sub_module.'</h1>'?>
</section>

<div class="cart-box"> 
    <!-- datails cart (products) -->
    <div class="details_box_cart">
        <div class="article_name"></div>
        <div class="article_price">32.000 DA</div>
        <input type="number" class="quantity_article" value="1" id=""/>
    </div>
   <!-- Remove article form cart (products) -->
   <i class="icon-trash"></i>
   <!-- Total price products -->
   <div class="total_price_cart">
    <span>total:</span>
   </div>
</div>

<?php 
include_once __DIR__.'/products.php';
?>


<?php 
include_once './views/composent/footer.php';
?>