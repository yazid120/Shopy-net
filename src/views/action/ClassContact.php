<?php

class Contact{
    public $connection; 
    private $message; 
   
    private $data;
    private $errors = []; 
    private static $fields = ['name','mail','subject','message']; 

    public function __construct($post_data){
      $this->data = $post_data; 
    }

    public function ValidateForm(){
      foreach(self::$fields as $field){
        if(!array_key_exists($field,$this->data)){
            trigger_error("$field this data isn't present in your form!!");
            return;
        }
      }
      $this->ValidateEmail(); 
      $this->ValidateUserName();
      $this->ValidateSubject(); 
      $this->FilterMessageInfos(); 
      return $this->errors; 
    }
    
    private function ValidateUserName(){
     $value_name = trim($this->data['name']); 
     if(empty($value_name)){
        $this->AddError('name','name data is empty !!');
     }else{
        if(!preg_match('/^[a-zA-Z0-9]*$/',$value_name)){
          $this->AddError('name','invalide name must cotaine 6-12 charcter!!'); 
        }
     }
    }
    private function ValidateEmail(){
        $value_Email = trim($this->data['mail']);
        if(empty($value_Email)){
          $this->AddError('mail', 'email data is empty');
        }else{
            if(!filter_var($value_Email,FILTER_VALIDATE_EMAIL)){
                $this->AddError('mail','invalid email address');
            }
        }
    }
    private function ValidateSubject(){
        $value_Subject = trim($this->data['subject']);
        if(empty($value_Subject)){
            $this->AddError('subject','no subject was added');
        }
    }
    private function FilterMessageInfos(){
        $value_Subject = trim($this->data['subject']);
        if(empty($value_Subject)){
            $this->AddError('message','no Contact message was added');
        }
    }

    private function AddError($key, $ErrorMessage){
        $this->errors[$key] = $ErrorMessage; 
    }

}


?>