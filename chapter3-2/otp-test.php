<?php
header("Content-Type: text/html; charset=UTF-8");
// 暗号化したい文字列
$str = "我輩は猫である。名前はまだない。";

// 使い捨てパッド(一度きり)
$pad = [
  12,20,148,22,87,91,239,187,206,215,103,207,192,46,75,243,
  204,61,121,210,145,167,108,78,166,129,109,239,138,134,150,196,
  217,63,158,201,204,66,181,198,54,0,0,130,163,212,57,167,
  169,115,170,50,109,116,173,177,252,242,233,3,33,28,139,73,
];

// 使い捨てパッドを用いて暗号化する
function convert($str, $pad) {
  $res = "";
  for ($i = 0; $i < strlen($str); $i++) {
    // 一文字を取り出す(ASCII 値を返す)
    $c = ord(substr($str, $i, 1));
    // var_dump($c);
    // exit;
    // XORで暗号化する
    // $cx = $c xor $pad[$i];
    $cx = $c^$pad[$i];
    // var_dump($cx);
    // exit;
    // 文字列として出力する
    $res .= chr($cx);
    $res_utf_8 = mb_convert_encoding($res, "UTF-8", "ASCII");
    echo mb_detect_encoding($res_utf_8);
    var_dump($res_utf_8);
    exit;
  }
  return $res_utf_8;
}

// 暗号化
$enc = convert($str, $pad);
echo "暗号化した文字列: {$enc}\n";
echo "<br>";
 //復号化
$dec = convert($enc, $pad);
echo "復号化した文字列: {$dec}\n";
