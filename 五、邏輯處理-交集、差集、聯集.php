<?php

    $Arr_a = array(77,5,5,22,13,55,95,4,796,1,0,9);
    $Arr_b = array(0,1,2,3,4,5,6,7,8,9);

    $Arr_c = array();
    $Arr_d = array();
    $Arr_e = array();
    //a交集b
    for ($i=0;$i<count($Arr_a);$i++){
        for ($j=0;$j<count($Arr_b);$j++){
            if ($Arr_a[$i] == $Arr_b[$j]){
                array_push($Arr_c,$Arr_a[$i]);
            }
        }
    }
    //去除重複值
    echo "a交集b：<br>";
    print_r(array_unique($Arr_c));
    //a差集b
    for ($i=0;$i<count($Arr_a);$i++){
        $j = 0;
        do{
            if ($Arr_a[$i] == $Arr_b[$j]){
                break;
            }
            $j++;
        }while ($j<count($Arr_b));
        if ($j == count($Arr_b)){
            array_push($Arr_d,$Arr_a[$i]);
        }
    }
    echo "<br>a差集b：<br>";
    print_r($Arr_d);
    //a聯集b
    function AAE($Arr1= array(),$Arr2= array()){
        $res = $Arr1;
        for ($i=0;$i<count($Arr2);$i++){
            if (in_array($Arr2[$i],$Arr1)){
                continue;
            }else {
                array_push($res,$Arr2[$i]);
            }
        }
        //print_r($res);
        return $res;
    }
    $Arr_e = AAE($Arr_a,$Arr_b);
    echo "<br>a聯集b：<br>";
    //去除重複值
    print_r(array_unique($Arr_e));


?>