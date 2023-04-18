<?php

function insertion_sort($list){
    for ($i = 1; $i < count($list); $i++){
        $key = $list[$i];
        $j = $i - 1;
        while($j >= 0 && $list[$j] > $key){
            $list[$j + 1] = $list[$j];
            $j--;
        }
        $list[$j+1] = $key;
    }

    return $list;
}

print_r(insertion_sort([10, 5, 2, 9, 0])); 