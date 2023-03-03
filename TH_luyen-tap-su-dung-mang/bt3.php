<?php
function tinhtong($arr)
{
    $sum = 0;
    foreach ($arr as $val) {
        $sum += $val;
    }
    return $sum;
}
$numbers = [1, 2, 3, 4, 5];
$sum = tinhtong($numbers);
echo "Tong cua day so la: " . $sum;
