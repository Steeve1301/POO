<?php

class Form{

    private $data;
    public $surround ='p';

    public function __construct($data = array()){
        $this->data=$data;
    }

    private function surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    private function getValue($index){
        return isset($this->data['$index']) ? $this->data[$index] :null;
    }
    public function startForm(){
        return '<form method="POST" action"#">';
    }
    public function inputUser($user){
        return $this->surround(
            '<input type="text" name="user"'.$user.'" value="' .$this->getValue($user);.'">','p'
        );
    }
    
    public function inputChoice($choice){
        return $this->surround('
        <select id="cars">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>
        ','p');
    }

    public function inputText($text){
        return $this->surround('
        <textarea id="w3mission">
            At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
        </textarea>
        ','p');
    }

    public function inputRadio($radio){
        return $this->surround('
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
        ','p');
    }

    public function submit(){
        return $this->surround('<button type="submit"></button>');
    }
}


?>