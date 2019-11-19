<?php
class Hattori {
  private $name;
  private $birth;
  private $age;


  public function __construct($name, $birth){
    $this->name = $name;
    $this->birth = $birth;

  }



  public function getName(){
    return $this->name;
  }

  public function getAge(){
    return floor(((date("Ymd"))-($this->birth))/10000);
  }

  public function getBirth(){
    return $this->birth;
  }

}

$makoto=new Hattori('誠',19730817);
$chiharu=new Hattori('ちゅり子',19711123);
$kyouka=new Hattori('きょうか',20040524);

$hattorifamiry = array($makoto, $chiharu, $kyouka);
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>家族名簿</title>
  </head>
  <body>
    <table border="1">
      <?php foreach ($hattorifamiry as $hattories):?>
      <p class="shiharainame">名前<?php echo $hattories->getName() ?></p>
      <p class="shiharaiprice">年齢<?php echo $hattories->getAge() ?>歳</p>
      <p class="shiharaiprice">誕生日<?php echo $hattories->getBirth() ?></p>
    <?php endforeach ?>
    </table>
  </body>
</html>
