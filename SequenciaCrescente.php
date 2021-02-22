<?php

function SequenciaCrescente(array $array): bool{

    $outsequence = [];

    if(count($array)<3){

        return true;
    }

    else{       

        for($i = 0; $i < count($array); $i++){

            $newarray = array_slice($array, 0);

            for($j = $i + 1; $j < count($array); $j++){
                
                if($array[$i] == $array[$j]){

                    array_push($outsequence, $array[$j]);

                    break;
                }
                elseif($array[$i] > $array[$j]){

                    array_push($outsequence, $array[$i]);

                    break;
                }
            }            
        }
    }

    print_r($outsequence);

    // print_r($array);

    if(count($outsequence) < 2){

        return true;
    }

    else {

        return false;
    }
}

?>