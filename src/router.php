<?php 

function get_uri(){
    return $_SERVER['REQUEST_URI'];
}

class Router{

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
    // $matchValid_uri = false; 
    // foreach(self::$uri_list as $u_list){
        // if($u_list == $uri){
            // $matchValid_uri = true; 
            // break; 
        // }
    // }
    // $matchValid_uri = in_array($uri,self::$uri_list); 

    $callback = $this->uriNormal[$uri] ?? false;
    
    if($callback){
        call_user_func($callback); 
    }else{
        http_response_code(404);
        require_once __DIR__ .'/views/404_page.php';
    }

}

}













?>