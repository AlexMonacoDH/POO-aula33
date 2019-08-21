<?php

abstract class Animal{
    protected $fome;
    protected $energia;

    public function morre(){
        echo 'Ai.... morri!';
    }
}

class Cachorro extends Animal{

}

$a = new Cachorro();
$a->morre();


?>