<?php

function SeculoAno(int $ano): int{

    return floor($ano - 1) / 100  + 1;
}

?>