
<footer class="footer_nav_sider">
<div class="foot_liste_wrapp">
<div class="copyright_banner">
    Copyright © Shopy_<span>net</span>.com 2023. All Right Reserved .
</div>
<div class="listed_element_work_with">
<img decoding="async" width="563" height="31" 
src="https://localhost/Shopy-net/src/views/images/footer-logos-signature.png" class="attachment-large size-large"
 alt="" srcset="https://localhost/Shopy-net/src/views/images/footer-logos-signature.png 300w" 
  sizes="(max-width: 563px) 100vw, 563px">
</div>
</div>

<div class="flexible_app_link">
  <div>
    <a href="">
    <img src="http://localhost/Shopy-net/src/views/images/Apple_store.png" style="width:9rem"/>
    </a>
  </div>
  <div>
    <a href="">
    <img src="http://localhost/Shopy-net/src/views/images/play_store.png" style="width:9rem"/>
    </a>
  </div>
  
</div>
</footer>
<?php if($_SERVER['REQUEST_URI'] == '/'){?>
<!-- js scripts -->
<script src="views/js/main.js" defer></script>
<!-- search product bar js script-->
<script src="views/js/search.js" defer></script>
<!-- Categorie product js script -->
<!-- <script src="views/js/categorie.js" defer></script> -->
<?php } else if($_SERVER['REQUEST_URI'] == '/contact'){?>
<script type="module" src="views/js/mail/index.js" defer></script>
<?php }?>
<?php if(isset($_SESSION['logged'])){?>
<script src="views/js/profile.js" defer></script>
<?php }?>
<?php if($_SERVER['REQUEST_URI'] == '/checkout'){?>
  <!-- bascket product payment js script-->
<script src="views/js/basket.js" defer></script>
<script src="views/js/payement.js" defer></script>
<?php }?>
<!-- axios js integration -->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>


</body>
</html>