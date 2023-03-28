<?php 
require_once __DIR__.'/action/db_conn.php'; 
$session_stat = session_status(); 
if($session_stat == 1)
 session_start();


$sql ="SELECT * FROM `product`"; 
$product = mysqli_query($connection,$sql); 

?>
<section class="container_products_article">
    <?php while($rows = mysqli_fetch_assoc($product)){?>
<div class="products_elments_sets">
  <img src="http://localhost/Shopy-net/src/views/images/<?=$rows['image_ur']?>" class="product_image"/>
  <p><?='<span>'.$rows['name_prod'].' </span>';?></p>
</div>
<?php }?>
</section>

