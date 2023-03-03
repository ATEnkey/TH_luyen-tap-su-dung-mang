<?php
function findmin($arr)
{
    $min = $arr [0];
    foreach ($arr as $val){
        if ($val < $min){
            $min = $val;
        }
    }
    return $min;
}
$numbers = [1,2,5,4,3];
$min = findmin($numbers);
echo "The smallest number is: " . $min;
?>