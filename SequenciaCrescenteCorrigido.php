<?php

function SequenciaCrescente(array $array){

    for($i = 0; $i < count($array); $i++){

        $subArray = array_merge(array_slice($array, 0, $i), array_slice($array, $i + 1));  

        $condicional = true;
        
        for($j = 1; $j < count($subArray); $j++){

            if($subArray[$j] <= $subArray[$j -1]){

                $condicional = false;

                break;
            }
        }

        if($condicional){

            return true;
        }
    }

    return false;
}

/**
 * Cria sequências de elementos randômicos no intervalo [0, 10].
 * Chama a função SequenciaCrescente() para testar cada sequência.
 * O teste é encerrado quando SequenciaCrescente() retornar true.
 * @param int $quantidade A quantidade de elementos randômicos em cada sequência
 */

function testeSequenciaCrescente($quantidade){

    do{
        $array = [];

        for($i = 0; $i < $quantidade; $i++){
    
            array_push($array, rand(0, 10));
        }        

        $return = SequenciaCrescente($array);

        print_r($array);

        var_dump($return);

    } while(!$return);
}

?>