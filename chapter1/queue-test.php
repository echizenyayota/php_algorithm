<?php
require_once 'queue.class.php';

// キューにデータを追加
$q = new Queue();
$q->enqueue("Panda");
$q->enqueue("Tiger");
$q->enqueue("Bird");

// キューに追加
while ($q->length() > 0) {
  $e = $q->dequeue();
  echo "[$e]\n";
}
