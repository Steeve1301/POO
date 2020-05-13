<?php
class Validator{
    public function valideText($text){
        if(preg_match('/[^A-Za-z- ]/',$text) || $text == ''){
            return false;
        }
        return true;
    }   

    public function valideNumber($number){
        if(preg_match('/[^0-9]/',$number) || $number == ''){
            return false;
        }
        return true;
    }

    public function valideEmail($email){
        if( !preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)){
            return false;
        }	
        return true;
    }

    public function valideFloat($float){
        if(preg_match('/[^0-9,.]/',$float) || $float == ''){
            return false;
        }
        return true;
    }

}