# **Shopy-net**
Shopy net platform E-commerce en Php / javascript

our platform offers a variety of products for all users and for each category to create an account
and find the affer de l'annes at shopy net.

## _You will find in this project Concepts such as:_ 

---
-Routing page in PHP.
*Login and Registration system.

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
index.php page access routing
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
```
---

