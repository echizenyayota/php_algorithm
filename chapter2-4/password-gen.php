<html>
  <body>
  <?php
  // パスワードに使っても良い文字の一覧
  $PASSWORD_CHARS = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' . 'abcdefghijklmnopqrstuvwxyz' . '0123456789_-#!$';
  // 任意の文字列のパスワードを生成
  function password_gen($length) {
    global $PASSWORD_CHARS;

    // パスワードに適したランダムなバイト列を得る
    $bytes = openssl_random_pseudo_bytes($length);
    $chars_len = strlen($PASSWORD_CHARS);

  }

  ?>
  </body>
</html>
