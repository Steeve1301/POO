<?php
class Voiture {


    private $ImmatNb = 0;

    private $dateCirculation = '23/11/2004';

    private $kilometers = 0;

    private $modele = "";
    private $brands = "";
    private $color = "";

    private $weight = 0;
    private $reserved = "";
    private $utility = "";
    private $country = "";
    private $age = 0;

    private function update(){

        $this->$reserved = ($this->$brands== "Audi") ? "reserved" : "free";

        $this->$typeOfVehicule = ($this->$weight > 3.5) ? "Utilitaire" : "Commercial";


        $country = $this->$registrationNumber,0,2;
        switch($country){
            case "BE" :

                $this->$country = "Belgium";
            break;
            case "FR" :

                $this->$country = "France";
            break;
            case "DE" :

                $this->$country = "Germany";
            break;
        }
        if($this->$km < 100000){
            $this->$use = "Low";
        }elseif($this->$km < 200000){
            $this->$use = "Middle";
        }else{
            $this->$use = "High";
        }
    }

    function __construct($number,$date,$km,$model,$brands,$color,$weight){
        $this->ImmatNb = $number;
        $this->dateCirculation = $date;
        $this->kilometers = $km;
        $this->model = $model;
        $this->brands = $brands;
        $this->color = $color;
        $this->weight = $weight;
        update();
    }

    
    public function run(){
        $this->km = $this->km + 100000;
        update();
    }

    public function Kilometers($km){
        $this->km = $km;
        update();
    }

}