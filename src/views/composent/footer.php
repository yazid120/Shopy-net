<?php 

?>
<footer class="footer_nav_sider">
<div>
    Copyright © Shopy_<span>net</span>.com 2023. All Right Reserved .
</div>
</footer>
<?php if($_SERVER['REQUEST_URI'] == '/'){?>
<!-- js scripts -->
<script src="views/js/main.js" defer></script>
<!-- search product bar js script-->
<script src="views/js/search.js" defer></script>
<!-- Categorie product js script -->
<script src="views/js/categorie.js" defer></script>

<?php } else if($_SERVER['REQUEST_URI'] == '/login'){?>
<script>console.log('contact page')</script>
<?php }?>

<!-- axios js integration -->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<!-- <script type="module" src="views/js/mail/index.js" defer></script> -->

</body>
</html>