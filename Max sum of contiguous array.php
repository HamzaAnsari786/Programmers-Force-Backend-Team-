<?php
function maxsum($arr) {
    $n = count($arr);
    $max_sum = $arr[0];
    $current_sum = $arr[0];
    for ($i = 1; $i < $n; $i++) {
        $current_sum = max($arr[$i], $current_sum + $arr[$i]);
        $max_sum = max($max_sum, $current_sum);
    }
    return ($max_sum < 0) ? 0 : $max_sum;
}
$array = array(-2, 1, -3, 4, -1, 2, 1, -5, 4,);
$maximum_sum = maxsum($array);
echo "Maximum sum of contiguous subarray: " . $maximum_sum;


?>