<?PHP  
include_once './views/composent/header.php';
$sub_module = 'bienvenu sur shopy net';

?>
<section class="main_section_shopyNet_Home">
<?='<h1>'.$sub_module.'</h1>'?>
</section>

<div>
<?php 
include_once __DIR__.'/products.php';
?>


<?php 
include_once './views/composent/footer.php';
?>