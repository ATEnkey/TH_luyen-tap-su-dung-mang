<?php
function findmultiplesOfThree($arr)
{
    foreach ($arr as $val) {
        if ($val % 3 == 0) {
            $result[] = $val;
        }
    }
    return $result;
}
$numbers = [1, 5, 6, 8, 12, 15];
$multiples = findMultiplesOfThree($numbers);
echo "The multiples of three are: " . implode(", ", $multipless);
