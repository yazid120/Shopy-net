<?php 

//CONFIGURATION FILE PRIVATE

define('ROOT',$_SERVER['DOCUMENT_ROOT']);

define('SERVER_URI',$_SERVER['REQUEST_URI']); 

define('DIRNAME',explode('/',$_SERVER['PHP_SELF'])[1]);

define('REQUEST_METHOD',$_SERVER['REQUEST_METHOD']);

define('AUTHOR_NAME','kevin_mak');

?>