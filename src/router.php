<?php 
require __DIR__.'/install.php';

class Route{
    private static $uri_list = array();
    private static $uriCallback = array(); 

static public function add($uri,$function){
   self::$uri_list[] = $uri;  
   self::$uriCallback[$uri] = $function; 
}

static public function submit(){
    $uri = explode('?',REQUEST_URI)[0];
    $matchValid_uri = false; 
    foreach(self::$uri_list as $u_list){
        if($u_list == $uri){
            $matchValid_uri = true; 
            break; 
        }
    }

    if($matchValid_uri){
        call_user_func(self::$uriCallback[$uri]); 
    }else{
        http_response_code(404);
        require_once __DIR__ .'/views/404_page.php';
    }

}


}

?>