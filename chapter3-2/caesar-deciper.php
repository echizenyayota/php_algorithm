<?php

//シーザー暗号文の変換テーブルを作成
function makeTable($shift) {
  $alp_b = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $alp_s = "abcdefghijklmnopqrstuvwxyz";
  $shift = $shift % strlen($alp_b);
  // var_dump($shift);
  // exit;
  $alp_b_shift = substr($alp_b, $shift).substr($alp_b, 0, $shift);
  // var_dump($alp_b_shift);
  // exit;
  $alp_s_shift = substr($alp_s, $shift).substr($alp_s, 0, $shift);
  // var_dump($alp_s_shift);
  // exit;
  $table = [];
  for ($i = 0; $i < strlen($alp_b);$i++) {
    $c1 = substr($alp_b, $i, 1);
    // var_dump($alp_b);
    // exit;
    $c2 = substr($alp_b_shift, $i, 1);
    // var_dump($alp_s);
    // exit;
    $table[$c2] = $c1;
    // var_dump($table);
    // var_dump($table[$c2]);
    $c1 = substr($alp_s, $i, 1);
    // var_dump($c1);
    $c2 = substr($alp_s_shift, $i, 1);
    // var_dump($c2);
    $table[$c2] = $c1;
    // var_dump($table);
    // var_dump($table[$c2]);
  }
  return $table;
}

function decode($str, $shift) {
  $table = makeTable($shift);
  $res = "";
  for ($i = 0; $i < strlen($str); $i++) {
    $c = substr($str, $i, 1);
    $res .= isset($table[$c]) ? $table[$c] : $c;
  }
  return $res;
}

// 暗号文
$s = trim(file_get_contents("encrypt.txt"));
//一文字ずつずらして解読に挑戦
for ($i = 1; $i <= 25; $i++) {
  $dec = decode($s, $i);
  echo "[$i] $dec\n";
  var_dump($dec);
}
