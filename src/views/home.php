<?PHP  
if(session_status() == PHP_SESSION_NONE)
session_start(); 

require_once __DIR__.'/action/db_conn.php'; 
require_once __DIR__.'/action/Db_Class_conn.php';
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
  
  <form action="" class="formulat_cat">
    <h3>categorie produit</h3>
  <div class="row_classic_categories">
    <?php while($rows = mysqli_fetch_assoc($categorie_prod)){ ?>
     <button class="class_active_st" value="<?=$rows['cat_name']?>">
      <?=$rows['cat_name']?>
     </button>
    <?php }?>
  </div>
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
/*$Db_Object = new Db_connect(); 
$connection_s = $Db_Object->connect(); 
$Page_num = (int)$connection_s->query('SELECT COUNT(`id`) FROM `product` ORDER BY id`')->fetch(PDO::FETCH_NUM)[0];*/
?>
<div class="pagination_elemant_container">
  <div class="page_pagination">
    <button>PREVIOUS</button>
    <p>1/1</p>
    <button>NEXT</button>
  </div>
</div>

<?php 
include_once './views/composent/footer.php';
?>