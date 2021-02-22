<?php

function Palindromo(string $palavra): bool{

    $palavra = strtoupper($palavra);

    $palavra_invertida = strrev($palavra);

    if($palavra == $palavra_invertida){

        return true;
    } 
    
    else{

        return false;
    }
}

?>