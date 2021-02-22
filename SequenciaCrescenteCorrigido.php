<?php

function SequenciaCrescente(array $array): bool{

    $outsequence = 0;

    $igualdades = 0;

    if(count($array)<3){

        return true;
    }

    else{       

        for($i = 0; $i < count($array); $i++){

            for($j = $i + 1; $j < count($array); $j++){
                
                if($array[$i] == $array[$j]){

                    $igualdades++;

                    break;
                }
            }            

            for($j = $i + 1; $j < count($array); $j++){

                if($array[$i] >= $array[$j]){

                    $outsequence++;

                    break;
                }
            }            
        }
    }

    if($igualdades > 1){

        return false;
    }

    else if($outsequence - $igualdades  <= 1){
    
        return true;
    }

    else {

        return false;
    }
}

?>