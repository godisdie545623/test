<?php
    $test = Array(77,5,5,22,13,55,97,4,796,1,0,9);
    //泡沫排序法
    for($i = 0;$i<count($test)-1;$i++){
        for($j=$i+1;$j<count($test);$j++){
            if ($test[$i]>$test[$j]){
                [$test[$i], $test[$j]] = [$test[$j], $test[$i]];
            }
        }
    }
    print_r($test);
?>