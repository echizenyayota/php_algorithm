<?php
require_once 'ringbuffer.class.php';

// 5件のログを記録するリングバッファーを作成
$rb = new RingBuffer(5);

// ログを追加する
$rb->append("A is Apple");
$rb->append("B is Banana");
$rb->append("C is Cute");
$rb->append("D is Desk");
$rb->append("E is Easy");
$rb->append("F is Fighter");
$rb->append("G is Good");

// 5件のログを順に表示
for ($i = 0; $i < 5; $i++) {
  $log =$rb->get($i);
  echo "[$log]\n";
}
