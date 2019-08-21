<?php

class Matematica{
    public static function somar(float $a, float $b){
        return $a + $b;
    }

    static $PI = 3.14;
    const e = 2.23;
}

echo Matematica::somar(4,5).'<br>';
echo Matematica::$PI.'<br>';
echo Matematica::e.'<br>';

?>