<?php

    $test = "人易科技:上 機 測 驗 - 演算法";
    $dush_index = 0;

    //1.把:改成全形
    for($i = 0;$i < strlen($test);$i++){
        if ($test[$i] == ":"){
            $test = substr_replace($test,mb_convert_kana($test[$i], 'A'),$i,1); 
            break;
        }
    }
    //2.去掉中文字間的空白(保留-號二側的空白)
    //先找出-的索引值
    for($i = 0;$i < strlen($test);$i++){
        if ($test[$i] == "-"){
            $dush_index =  $i;
            break;
        }
    }
    //以-索引值做切割，消除字串中的空白
    $Arr1 = str_split($test,$dush_index-1);
    //『\s』代表所有的空白字符，包括空格、製表符、換頁符 ... 等，而『(?=)』代表向前查詢，整段的意思是找出所有的空白字符，並用 "" 取代掉，也就是讓所有空白字符消失
    $Arr1[0] = preg_replace('/\s(?=)/', '', $Arr1[0]);
    $test = $Arr1[0].$Arr1[1];
    
    //3.列印出符號：到-之間的字元
    //先找出-跟：的索引值
    $colon_index = 0;
    for($i = 0;$i < strlen($test);$i++){
        if (strcmp($test[$i],"：") == -2){
            $colon_index = $i;
        }
        if ($test[$i] == "-"){
            $dush_index =  $i;
        }
    }
    //以-索引值做切割，捨去-之後的字串
    $Arr2 = str_split($test,$dush_index);
    //全形冒號佔3個字
    echo substr($Arr2[0], $colon_index+3);
?>