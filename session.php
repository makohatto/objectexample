<?php
require_once 'h.php';
session_start();

$_SESSION['name'] = "makohatto";
echo $_SESSION['name'];
 ?>
 <?php
if(!isset($_COOKIE["PHPSESSID"])){
  print('初回の訪問です。セッションを開始します。');
}else{
  print('セッションは開始しています。<br>');
  print('セッションIDは'.$_COOKIE["PHPSESSID"].'です。<br>');
}
  ?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial^scale=1.0">
    <title>セッション使いたい☆</title>
  </head>
  <body>
    <?php
    if(! isset($_SESSION['count'])){
      //はじめてのアクセス
      $_SESSION['count']=1;
    }else{
      //２回めのアクセス
      $_SESSION['count']++;

    echo 'あなたのアクセス回数：'.h($_SESSION['count']).'<br>';
    echo '<p>現在のセッションIDは「'.h(session_id()).'」です。</p><br>';

    if(isset($_SESSION['date'])){
    echo '前回の訪問日時：'.h($_SESSION['date']).'<br>';
  }
}
$_SESSION['date'] =date('Y年m月d日　H時i分s秒');
?>

  </body>
</html>
