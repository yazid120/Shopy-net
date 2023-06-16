<?php 
include_once './views/composent/header.php';


?> 
<div class="page_conatiner" style="position: relative;
  min-height: 100vh;">
<section class="wrappe_help_center">
    <div class="help_ceter_bkground">
        <img src="https://localhost/Shopy-net/src/views/images/6127616_22947-removebg-preview.png" alt="" style="width:15rem"/>
        <h2 class="text-3xl	font-semibold">Centre d'aide & information et Service client</h2>
    </div>
     <div class="search_helpwrapp" style="display: flex;flex-direction: column;align-items: center;">
        <p>Comment pouvons-nous vous aider?</p>
        <div class="Search__wrapp w-2/5" style="position: relative;">
        <img class="search-nt" src="http://localhost/Shopy-net/src/views/images/search.png" style="width:20px; cursor:pointer;
                  padding:0.2rem;position: absolute;top: 1.4rem;left: 1rem;" placeholder="Ecrivez une question"/>
            <input type="" class="search__help_bar mt-2" name=""/>
        </div>
     </div>
     <div class="w-full" style="display: flex;justify-content:center;margin-top:2rem;">
       <div class="classic_wrapp" style="width: 63%;">
        <h1 class="text-3xl font-bold">mode d'emploi e commerce</h1>
        <p>L’e-commerce se sert de tous les supports Internet pour fonctionner.</p>
        <p><strong>Un vendeur (professionnel, particulier, institutionnel) va publier une annonce pour mettre en vente son bien ou 
            sa prestation sur une plateforme digitale ou un site e-commerce.</strong></p>
        <p>Le consommateur intéressé par le bien ou la prestation va procéder à l’achat via un tunnel d'achat en choisissant l'un 
            des moyens de paiements proposés inclus sur la plateforme de vente et va ensuite recevoir 
            sa commande à l’adresse de son choix.
        </p>
        <div>
            <img src="https://localhost/Shopy-net/src/views/images/schema-ecommerce-wizishop.jpg" alt=""/>
        </div>

        <!-- <form action="" method="POST" id="commentForm">
            <input id="name" name="name" type="text" placeholder="Votre nom" required=""> 
            <input id="email" name="email" type="email" placeholder="Votre adresse email" required=""> 
            <input id="url" name="url" type="url" placeholder="Votre site internet">
            <input type="hidden" value="5ade56cf4b583b278a768e24" name="blog"> 
            <textarea minlength="21" name="content" id="content" placeholder="Ecrire votre commentaire" required="">
            </textarea> 
            <input type="hidden" name="token" id="verif-token">
            <input id="submitComments" type="submit" value="Valider le commentaire">
        </form>
      </div> -->
     </div>
    
</section>

<?php 
include_once './views/composent/footer.php';
?>
</div>