<?php
if(session_status() == PHP_SESSION_NONE)
session_start(); 

define('CSRF_TOKEN_SECRET','pVAOmYSk');

function Creat_Token(){
   $bytes = 8;
   $algorithme_Csrf = 'sha256';
   $seeds = random_bytes($bytes);
   $S_cur_time = time();

   $token_hash = hash_hmac($algorithme_Csrf,session_id() . $seeds . $S_cur_time ,CSRF_TOKEN_SECRET,true); 
   $__hash_return = $token_hash . '|' . $seeds . '|' . $S_cur_time; 

   //return the hashed csfs token all with base 64 url verification
   return urlSafeEncode($__hash_return);
}
function Validate_Token(){
    
}
//base 64 url encode
function urlSafeEncode($prefix){
  $prefix_return = rtrim(base64_encode(strstr($prefix,'+_','_-'),'=')); 
  return $prefix_return;
}
//base 64 url decode
function urlSafeDncode($prefix){
  $prefix_return = rtrim(base64_decode(strtr($prefix,'_-','+_')));
  return $prefix_return;
}