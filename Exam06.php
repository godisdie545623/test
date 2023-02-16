<?php
// 六、兩數總和
$test_arr = Array(3,3);
$test_target = 6;
function twoSum($nums,$target){
    //例外排除
    if (count($nums) >= 104 || count($nums) <= 1 || $target >= 110 || $target <= -110){
        return "something wrong";
    }
    for ($i = 0;$i < count($nums);$i++){
        if ($nums[$i] >= 110 ||  $nums[$i] <= -110){
            return "something wrong";
        }
    }
    
    for ($j = 0;$j < count($nums)-1;$j++){
        $sum = 0;
        for ($k = $j+1;$k < count($nums);$k++){
            $sum = $nums[$j] + $nums[$k];
            if ($sum == $target){
                return "[".$j.",".$k."]";
            }
            //echo $sum."<br>";
            //echo "J=".$j."  K=".$k."<br>"; 
        }
    }
    return -1;
}
$ans = twoSum($test_arr,$test_target);
echo $ans."<br>";
//echo "因為nums [".$ans[1]."] + nums [".$ans[3]."] == ".$test_target."所以我們返回 " . $ans;
?>