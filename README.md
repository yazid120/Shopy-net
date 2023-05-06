<p align="center"> <a href="https://github.com/yazid120/Shopy-net">
<img src="https://github.com/yazid120/Shopy-net/blob/main/src/views/images/homekevinDownloadsshopping-cart-removebg-preview.png" alt="Logo Downloads"/>
</a></p>

# **Shopy-net** 🛒
Shopy net E-Commerce en [PHP](https://www.php.net/) / [javascript](https://www.javascript.com/)

# Introduction

[Shopy net](https://github.com/yazid120/Shopy-net) est une plate-forme E-Commerce qui propos une variété de services et produits pour tout type
d'utilisateurs et pour chaque catégorie ,comme pour chaque site de vente en ligne Shopy-net est facile, securiser et illimité ,créer un compte maintenant et commander se que vous voulez en deux clics sur shopy net.

**Type de E-commerce :**
(B2C) Business to consumer

#C'set quoi une stratégie b2c?
Une entreprise business to consumer (B2C) est par définition une entreprise qui cible des clients individuels particuliers. Une entreprise B2C vend donc des produits et/ou réalise des prestations de service directement à/pour des particuliers.

## !['Image Link'](https://github.com/yazid120/Shopy-net/blob/main/src/img_README/Screenshot%20from%202023-04-24%2017-06-28.png)

# Public cible 👥
Shopy-net est fait pour tout le monde, On propos sur cette Platform de tout les genrs

# Nos Objectif 🎯
- Satisfaire les clients au niveau des services et des prix 💲
- Create un Processus d'achat rapide ⏱️ et flexible en afrique 
- Service apres vente et client pour une assurance contre vole et SCAM ..
- Mettre en disposition un Variété de produit Attirer des acheteurs de toutes les types
- Apport d'un nouveau service àu clients et etre à jour
- Maximum de sécurité du site 🔒


### Concepts et chapitres du projet:  

---
- Routing page in PHP
  - Classe router `src/router.php`
- Login and Registration system
  - Login authentication
- Multiple back-ends for session and cache storage.
- SQL DataBase design and creation
- Database agnostic schema migrations.
- Robust background job processing.
- Admin Panel with privileges (CREATE, MODIFY, DELETE, UPDATE) Products.
---

Classique php router: 
```class Router{
    public $uriNormal = array();
    public $uriStaticContent = array();
    public $uriRegex = array();
    function __construct()
    {
        $this->uriNormal = array();
        $this->uriStaticContent = array();
        $this->uriRegex = array();
    }
public function add($uri,$function){
    $this->uriNormal [$uri] = $function;
}

public function resolve(){
    $uri = explode('?',REQUEST_URI)[0];
    $callback = $this->uriNormal[$uri] ?? false;
    if($callback){
        call_user_func($callback); 
    }else{
        http_response_code(404);
        require_once __DIR__ .'/views/404_page.php';
    }
}
}
```
'index.php' page access routing
```$router->add('/' ,function(){
  require __DIR__. '/views/home.php';
});

$router->add('/register' ,function(){
    require __DIR__ .'/views/register.php';
});

$router->add('/login', function(){
    require __DIR__ .'/views/login.php';
});

$router->add('/logout', function(){
    require __DIR__ .'/views/logout.php';
}); 

$router->add('/infos',function(){
    require __DIR__ .'/views/infos.php';
}); 

$router->add('/contact',function(){
  require __DIR__ .'/views/contact.php'; 
}); 
```
---

Login and registration system php mysqli authentication

---
'Sign-up page'
## !['Image Link'](https://github.com/yazid120/Shopy-net/blob/main/src/img_README/Screenshot%20from%202023-04-24%2017-08-17.png)
---
'login page'
## !['Image Link'](https://github.com/yazid120/Shopy-net/blob/main/src/img_README/Screenshot%20from%202023-04-24%2017-08-49.png)
