<?php

//シーザー暗号文の変換テーブルを作成
function makeTable($shift) {
  $alp_b = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $alp_s = "abcdefghijklmnopqrstuvwxyz";
  $shift = $shift % strlen($alp_b);
  $alp_b_shift = substr($alp_b, $shift).substr($alp_b, 0, $shift);
  // $alp_s_shift = substr($alp_b, $shift).substr($alp_b, 0, $shift);
  $table = [];
  $data = gettype($alp_b_shift);
  echo $data;
}

makeTable(1);

// // 暗号文
// $s = trim(file_get_contents("encrypt.txt"));
// //一文字ずつずらして解読に挑戦
// for ($i = 1; $i <= 25; $i++) {
//   $dec = decode($s, $i);
//   echo "[$i] $dec\n";
//   var_dump($dec);
// }


 ?>
