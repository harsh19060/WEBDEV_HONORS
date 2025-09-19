<?php

class Add {
    //properties
    public $num1;
    public $num2;

    //constructr
    public function __construct(int $numm1 , int $numm2){
        $this->num1 = $numm1;
        $this->num2 = $numm2;
    }

    //methods 
    public function execute (){
        return $this->num1+ $this->num2;
    }
}