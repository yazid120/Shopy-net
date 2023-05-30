<?php 
require_once __DIR__.'/action/db_conn.php'; 
require_once __DIR__.'/action/Db_Class_conn.php';
require_once __DIR__.'/action/PanierProduit.php';
$session_stat = session_status(); 
if($session_stat == PHP_SESSION_NONE){
  session_start();
}


$Db_Object = new Db_connect(); 
$connection_s = $Db_Object->connect(); 
$product = (int)$connection_s->query('SELECT COUNT(`id`) FROM `product` ORDER BY `id`')->fetch(PDO::FETCH_NUM)[0];

$current_page = (int)($_GET['page'] ?? 1);
if($current_page<=0){
  throw new Exception('Page selectioner non valider');
}
#Nombre de page de produit Total
$numberPage = ceil($product/8); 

#Maximum de produit afficher par page
$max_productPerPage= 8; 
$Posts_prod = $connection_s->query("SELECT * FROM `product` ORDER BY `date_added` DESC LIMIT $max_productPerPage"); 
if($current_page > $numberPage){
  echo'<script>alert("Page non existent")</script>';
}

?>
<div class="main_section_shopyNet_Home" id="product_list">

</div>
<section class="container_products_article">
    <?php while($rows= $Posts_prod->fetch()){?>
      
<div class="products_elments_sets">
  <img src="http://localhost/Shopy-net/src/views/images/<?=htmlspecialchars($rows['image_ur'])?>" class="product_image"/>
  <p class="title_product" style="margin:0" name="libelle_produit"><?= htmlspecialchars($rows['name_prod']);?></p>
  <p class="price_unity_product" name="prix_produit"><?='<span>'.htmlspecialchars($rows['price_unit']).'</span> DA'?></p>
  <button class="add_artCart_product" id="add_shop_article_btn" name="add_product" type="submit">
    Add to cart</button>
</div>
<?php }
#Free memorie result and close connection
$connection = null
?>
</section>
<div class="pagination_elemant_container">
<div class="max-w-2xl mx-auto">
	<nav aria-label="Page navigation example">
		<ul class="inline-flex -space-x-px">
			<li>
				<a href="#"
					class="bg-black border border-gray-300 text-gray-500 hover:bg-gray-100 
          hover:text-gray-700 ml-0 rounded-l-lg leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 
          dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
			</li>
      <?php 
       for($i=1; $i<=$numberPage; $i++):
     echo
			 '<li>
				<a href="#"
					class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 leading-tight
           py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 
           dark:hover:text-white">'.$i.'</a>
			</li>';
      endfor;?>
			<li>
				<a href="#"
					class="bg-black border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 rounded-r-lg leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
			</li>
		</ul>
	</nav>
</div>
</div>
<?php
$Panier_Object= new Panier(); 
$Creation_Panier = $Panier_Object->creation_panier(); 
 
if(isset($_POST['add_product'])){
  $nom_produit = $_POST['libelle_produit'];
  $prix_produit = $_POST['prix_produit'];
  $qte_produit = $_POST['qte_produit'];  
  
  $Creation_Panier = $Panier_Object->ajouter_produit_panier($nom_produit,$prix_produit,$qte_produit);
}
?>

