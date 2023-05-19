<?PHP  
if(session_status() == PHP_SESSION_NONE)
session_start(); 

require_once __DIR__.'/action/db_conn.php'; 
include_once './views/composent/header.php';

$sql_cat = "SELECT * FROM `categories`";
$categorie_prod = mysqli_query($connection,$sql_cat);
?>

<body>
<script type="text/javascript">
  let Categorie_Object = [
    {cat_prod:'categorie produit'},
    {max_price_cat:'max price'},
    {min_price_cat:'min price'}, 
    {search_cat:'Search produit'}
  ]; 
</script>

<div class="base_box_manage_search_product">
  
  <form action="" class="formulat_cat"><p>categorie product</p>
    <select name="selection_categorie_product_list" id="production_list" class="selection_cat_list">
    <option value="---">---</option>
    <?php while($rows = mysqli_fetch_assoc($categorie_prod)){ ?>
      <option value="<?=$rows['cat_name']?>"><?=$rows['cat_name']?></option>
    <?php }?>
    </select>

<div class="anum_max_min_price_prod">
<!-- maximum price categorie -->
    <div class="sub_part_cat">
      <label for="maximum_price_input">
        <script>document.write(Categorie_Object[1].max_price_cat)</script>
      </label>
      <input type="text" class="price_cat_typo" id="maximum_price"
      name="maximum_price_input" value=""/>
    </div>
<!-- minimum price categorie -->
    <div class="sub_part_cat">
      <label for="minimum_price_input">
        <script>document.write(Categorie_Object[2].min_price_cat)</script>
      </label>
      <input type="text" class="price_cat_typo" id="minimum_price"
      name="minimum_price_input" value=""/>
    </div>
</div class="sub_part_cat">
    <!--  Search categorie btn -->
    <div class="anum_max_min_price_sub">
      <button type="button" role="submit" class="submit_search_cat_btn" id="select_cat_button" 
      role="button">
        <script>document.write(Categorie_Object[3].search_cat)</script>
      </button>
    </div>
    <div class="num_result_search"><h2>result: <span> 0</span></h2></div>
  </form>
</div>



<div class="cart-box" id="cart_box_side"> 
    <!-- Close cart icon -->
<div id="close_crt_vid" class="closing_cart_icon">
<svg class="close_cart_btn" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
  <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 
12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path>
</svg>
</div>

    <div class="cart_title">
    <div class="items_count_cart"><p>items(<span id="items_con"><b>0</b></span>)</p></div>
      <h2>Your shopping Cart</h2>
    </div>
    <!-- datails cart (products) -->
    <div class="details_box_cart"> 
      <!--<div class="cart_box">
      <img src="http://localhost/Shopy-net/src/views/images/Ps4_Pro.jpg" style="width:25%"  />
     
        <svg class="remove_article" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" 
            ><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 
        12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg>

        <div class="cart_products_elements">
          <div class="article_name">article name</div>
          <div class="article_price">32000 DA</div>
          
          <input type="number" class="quantity_article" value="1" id=""/>
        </div>
      </div>-->
    </div>
   
   <!-- Total price products -->
   <div class="total_price_cart">
    <span class="price_total" id="total_cart_price"><b>Prix total</b><p>(Inc.Taxes):</p></span>
    <div class="article_price_total">0$</div>
   </div>

   <div class="code_pormo_part">
    <input type="text" id="form1" class="" />
    <label class="form-label" for="form1">code Promo</label>
    <button type="button" class="">Apply</button>
   </div>

   <button class="buy_shops_btn" id="buy_allShops"> Check out! </button>
  
</div>

</body>
<?php 
include_once __DIR__.'/products.php';
?>


<?php 
include_once './views/composent/footer.php';
?>