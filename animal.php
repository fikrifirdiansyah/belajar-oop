<?php

class animal{
    public $legs;
    public $cold_blooded = false;
    public $name;

    public function getName(){
        return $this->name;
    }

    public function setName($name){
         $this->name = $name;
    }

    public function legs()
    {
        return $this->legs = 2;
    }

    public function cold_blooded(){
        return $this->cold_blooded = 'false';
    }

    // public function getLegs()
    // {
    //     return $this->legs;
    // }
    
    // public function setLegs($legs)
    // {
    //     $this->legs = $legs;
    // }
    // public function getCold_blooded()
    // {
    //     return $this->cold_blooded;
    // }
    
    // public function setCold_blooded($cold_blooded)
    // {
    //     $this->cold_blooded = $cold_blooded;
    // }
}


?>