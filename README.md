<p align="center"> <a href="https://github.com/yazid120/Shopy-net">
<img src="https://github.com/yazid120/Shopy-net/blob/main/src/views/images/logo_shopynet_ecommerce.png" alt="Logo Downloads"/>
</a></p>

# **Shopy-net**
Shopy net E-Commerce en [PHP](https://www.php.net/) / [javascript](https://www.javascript.com/)

# Introduction

[Shopy net](https://github.com/yazid120/Shopy-net) est une plate-forme E-Commerce qui offre une variété de services et produits pour tous 
les utilisateurs et pour chaque catégorie pour créer un compte et retrouvez l'affer de l'annes sur shopy net.

## !['Image Link'](https://github.com/yazid120/Shopy-net/blob/main/src/img_README/Screenshot%20from%202023-04-24%2017-06-28.png)

## _You will find in this project Concepts such as:_ 

---
- Routing page in PHP
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
