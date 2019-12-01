<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>データをCookieに保存したい（保存する）</title>
  </head>
  <body>
  <p>
  <?php
  require_once 'h.php';

  if(isset($_COOKIE['sample'])){
    echo 'Cookieの中身: ' . h($_COOKIE['sample']);
  } else{
    echo 'Cookieはありません';
  }
  ?>
  </p>
  <p><a href="delete_cookie.php">クッキーを削除する</a></p>
  </body>
</html>
