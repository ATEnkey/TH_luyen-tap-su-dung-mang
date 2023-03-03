<?php
function countOccurrences($arr, $target)
{
    $count = 0;
    foreach ($arr as $val) {
        if ($val == $target) {
            $count++;
        }
    }
    return $count;
}
$numbers = [1, 2, 3, 3, 2, 5, 1];
$count = countOccurrences($numbers, 3);
echo "The number 2 appears " . $count . " times in the array.";
