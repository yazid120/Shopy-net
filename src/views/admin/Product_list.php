<?php 
require_once __DIR__.'/../action/adminDisplayClass.php';
require_once __DIR__.'/../action/Db_Class_conn.php';
$Admin_Object = new adminDisplay(); 
$Db_Object = new Db_connect(); 
$connection_s = $Db_Object->connect(); 
?>

<?php
include_once __DIR__.'/admin_component/header.php';
?>

<body>
<h2 class="text-2xl m-5">list des produits</h2>
<table border="1" class="border-collapse border border-slate-500 min-w-full text-center 
text-sm font-light dark:border-neutral-500">
<thead>
  <tr>
    <th col="scope" class="text-center border-r px-6 py-4 dark:border-neutral-500 bg-blue-200">Code produit</th>
    <th col="scope" class="text-center border-r px-6 py-4 dark:border-neutral-500 bg-blue-200">catégorie produit</th>
    <th col="scope" class="text-center border-r px-6 py-4 dark:border-neutral-500 bg-blue-200">Nom produit</th>
    <th col="scope" class="text-center border-r px-6 py-4 dark:border-neutral-500 bg-blue-200">description produit</th>
    <th col="scope" class="text-center border-r px-6 py-4 dark:border-neutral-500 bg-blue-200">prix uniter</th>
    <th col="scope" class="text-center border-r px-6 py-4 dark:border-neutral-500 bg-blue-200">image produit</th>
    <th col="scope" class="text-center border-r px-6 py-4 dark:border-neutral-500 bg-blue-200">quantites produit</th>
    <th col="scope" class="text-center border-r px-6 py-4 dark:border-neutral-500 bg-blue-200">date ajouter</th>
    <th col="scope" class="text-center border-r px-6 py-4 dark:border-neutral-500 bg-blue-200">Action</th>
  </tr>
</thead>
    <?php 
      echo $Admin_Object->DisplayProduct($connection_s);
    ?>
</table>
</body>