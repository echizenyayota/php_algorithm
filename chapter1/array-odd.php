<?php
$a = [0, 1, 2, 3, 4, 5, 11, 13, 14, 16];

// 不要な値（奇数）を取り除く
$result = array_filter($a, function($v){
  return ($v % 2 == 1);
});
print_r($result);
