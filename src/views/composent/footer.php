
<footer class="footer_nav_sider">
<div class="foot_liste_wrapp">
<div>
    Copyright © Shopy_<span>net</span>.com 2023. All Right Reserved .
</div>
<div class="listed_element_work_with">
<img decoding="async" width="563" height="31" 
src="https://q4y2k3w9.rocketcdn.me/wp-content/uploads/2022/04/footer-logos.png" class="attachment-large size-large"
 alt="" srcset="https://q4y2k3w9.rocketcdn.me/wp-content/uploads/2022/04/footer-logos.png 563w,
  https://q4y2k3w9.rocketcdn.me/wp-content/uploads/2022/04/footer-logos-300x17.png 300w" 
  sizes="(max-width: 563px) 100vw, 563px">
</div>
</div>
</footer>
<?php if($_SERVER['REQUEST_URI'] == '/'){?>
<!-- js scripts -->
<script src="views/js/main.js" defer></script>
<!-- search product bar js script-->
<script src="views/js/search.js" defer></script>
<!-- Categorie product js script -->
<script src="views/js/categorie.js" defer></script>

<?php } else if($_SERVER['REQUEST_URI'] == '/contact'){?>
<script type="module" src="views/js/mail/index.js" defer></script>
<?php }?>
<!-- axios js integration -->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>


</body>
</html>