<?PHP  
include_once './views/composent/header.php';
?>

<div class="cart-box" id="cart_box_side"> 
    <!-- Close cart icon -->
<div id="close_crt_vid" class="closing_cart_icon">
<svg class="close_cart_btn" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
  <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 
12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>
</div>

    <div class="cart_title">
      <h2>your shopping cart:</h2>
    </div>
    <!-- datails cart (products) -->
    
            
    <div class="details_box_cart"> 
      <div class="cart_box">
      <img src="http://localhost/Shopy-net/src/views/images/Ps4_Pro.jpg" style="width:25%"  />

      <!-- Remove article form cart (products) -->
          <svg class="remove_article" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" 
            ><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 
        12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg>

        <div class="cart_products_elements">
          <div class="article_name">article name</div>
          <div class="article_price">32000 DaA</div>
          <!-- product quantity -->
          <input type="number" class="quantity_article" value="1" id=""/>
        </div>

      </div>
    </div>
   
   <!-- Total price products -->
   <div class="total_price_cart">
    <span class="price_total" id="total_cart_price"><b>total:</b></span>
    <div class="article_price_total">0$</div>
   </div>

   <button class="buy_shops" id="buy_allShops"> buy now! </button>
</div>

<?php 
include_once __DIR__.'/products.php';
?>


<?php 
include_once './views/composent/footer.php';
?>