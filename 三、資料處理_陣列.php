<?php
    $test = array(0,1,2,3,4,5,6,7,8,9);
    $odd_sum = 0;
    $even_sum = 0;
    $res = 0;
    $odd = Array();
    $even = Array();

    for($i=0;$i<count($test);$i++){
        if ($test[$i] != 0){
            if ($test[$i] % 2 == 0){
                $even_sum = $even_sum + $test[$i];
                array_push($even,$test[$i]);
            }else {
                $odd_sum = $odd_sum + $test[$i];
                array_push($odd,$test[$i]);
            }
        }
    }
    $res = $odd_sum-$even_sum;
    echo "計算出「奇數值總和」減去「偶數值總和」 = ".$res."<br>";
    echo "偶數陣列：";
    print_r($even);
    echo "<br>奇數陣列：";
    print_r($odd);










?>