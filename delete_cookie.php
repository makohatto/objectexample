<?php
setcookie('sample', '', time() - 3600, '/');
 ?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Cookieを削除したい</title>
  </head>
  <body>
  <p>Cookieを削除しました。</p>
  <p><a href="print_cookie.php">Cookieの中身を表示する</a></p>
  </body>
</html>
