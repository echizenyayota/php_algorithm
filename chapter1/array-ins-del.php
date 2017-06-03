<?php
// 配列で列挙するときの注意
$a = [1, 2, 3];

// -- 追加 --
// 末尾に追加
$a[] = 4;
array_push($a, 5);
array_unshift($a, 0);
print_r($a);
