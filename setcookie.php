<?php
  $cookie_data = 'PHP逆引きレシピ';
  $result = setcookie('sample', $cookie_data, time() + 3600, '/');
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>データをCookieに保存したい（保存する）</title>
  </head>
  <body>
  <?php
  if ($result){
    echo '<p>Cookieを保存しました</p>';
  } else{
    echo '<p>setcookie()関数の実行に問題が見つかりました。</p>';
  }
  ?>
  <p><a href="print_cookie.php">Cookieの中身を表示する</a></p>
  </body>
</html>
