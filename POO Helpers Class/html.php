<?php

class Balise{

    public function doc(){
        return "<!DOCTYPE html>";
    }
    public function htmlOpen($lang){
        return '<html lang="'.$lang.'">';
    }
    public function htmlClose(){
        return '</html>';
    }
    public function headOpen(){
        return '<head>';
    }
    public function headClose(){
        return '</head>';
    }

    public function metaDescription($desc){
        return '<meta name="description" content="'.$desc.'">';
    }
    public function metaCharset($charset){
        return  '<meta charset="'.$charset.'">';
    }
    public function css($css){
        return '<link rel="stylesheet" href="'.$css.'">';
    }
    public function title($title){
        return '<title>'.$title.'</title>';
    }
    public function bodyOpen(){
        return '<body>';
    }
    public function bodyClose(){
        return '</body>';
    }
    public function img($img,$alt){
        return '<img src="'.$img.'" alt="'.$alt.'">';
    }
    public function a($link,$name){
        return '<a href="'.$link.'">'.$name.'</a>';
    }

    public function javascript($js){
        return '<script src="'.$js.'"></script>';
    }

}