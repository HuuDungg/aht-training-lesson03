<?php
require_once 'StopWatch.php';

function selectionSort(&$arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        $minIdx = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIdx]) {
                $minIdx = $j;
            }
        }
        $temp = $arr[$minIdx];
        $arr[$minIdx] = $arr[$i];
        $arr[$i] = $temp;
    }
}

$array = [];
for ($i = 0; $i < 1000; $i++) {
    $array[] = rand(1, 1000);
}

$stopWatch = new StopWatch();

$stopWatch->start();
selectionSort($array);
$stopWatch->stop();

echo "Thời gian thực thi thuật toán Selection Sort: " . $stopWatch->getElapsedTime() . " ms\n";
