<?php
require_once 'stack.class.php';

// スタックにデータを追加
$t = new Stack();
$t->push("apple");
$t->push("grape");
$t->push("orange");

// スタックのデータを表示する
while ($v = $t->pop()) {
  echo "[$v]\n";
}
