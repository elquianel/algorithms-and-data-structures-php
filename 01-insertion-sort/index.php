<?php

function insertion_sort($list){
    $i = 1;
    for($i; $i < count($list); $i++){
        $copia = $list[$i];
        while ($i > 0 && $list[$i - 1] > $copia) {
            $list[$i] = $list[$i - 1];
            $i--;
        }
        $list[$i] = $copia;
    }

    return $list;
}

print_r(insertion_sort([10, 5, 2, 9, 0])); 

