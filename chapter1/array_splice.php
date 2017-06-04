<?php
// 任意の場所の要素を取り出す
$b = [0, 1, 2, 3, 4, 5];
// $c = array_splice($b, 2, 3);
//
// print_r($c);
// exit;
$sub = array_splice($b, 2, 3);

print_r($b);
echo "</br>";
print_r($sub);
