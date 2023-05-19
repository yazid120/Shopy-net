<?php 
require_once __DIR__.'/action/db_conn.php'; 
$session_stat = session_status(); 

if($session_stat == PHP_SESSION_NONE){
  session_start();
}

$sql ="SELECT * FROM `product`"; 
$product = mysqli_query($connection,$sql); 

?>
<div class="main_section_shopyNet_Home" id="product_list">

</div>
<section class="container_products_article">
    <?php while($rows = mysqli_fetch_assoc($product)){?>
<div class="products_elments_sets">
  <img src="http://localhost/Shopy-net/src/views/images/<?=htmlspecialchars($rows['image_ur'])?>" class="product_image"/>
  <p class="title_product" style="margin:0"><?= htmlspecialchars($rows['name_prod']);?></p>
  <p class="price_unity_product"><?='<span>'.htmlspecialchars($rows['price_unit']).'</span> DA'?> </p>
  <button class="add_artCart_product" id="add_shop_article_btn">Add to cart</button>
</div>
<?php }
#Free memorie result and close connection
mysqli_free_result($product); 
mysqli_close($connection)?>
</section>

