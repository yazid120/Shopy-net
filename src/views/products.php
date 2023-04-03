<?php 
require_once __DIR__.'/action/db_conn.php'; 
$session_stat = session_status(); 

if($session_stat == 1){
  //session_start();
}
$sub_module = 'bienvenu sur shopy net';


$sql ="SELECT * FROM `product`"; 
$product = mysqli_query($connection,$sql); 

?>
<div class="main_section_shopyNet_Home">
<?='<h1>'.$sub_module.'</h1>'?>
</div>
<section class="container_products_article">
    <?php while($rows = mysqli_fetch_assoc($product)){?>
<div class="products_elments_sets">
  <img src="http://localhost/Shopy-net/src/views/images/<?=$rows['image_ur']?>" class="product_image"/>
  <p><?='<span>'.$rows['name_prod'].' </span>';?></p>
  <p><?='<span>'.$rows['price_unit'].'</span>'?> DA</p>
  <button class="add_artCart_product" id="add_shop_article_btn">add to cart</button>
</div>
<?php }?>
</section>

