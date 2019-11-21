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
      <tr>
        <th>名前</th>
        <th>年齢</th>
        <th>誕生日</th>
      </tr>

      <?php foreach ($hattorifamiry as $hattories):?>
      <tr>
      <td><?php echo $hattories->getName() ?></td>
      </tr>
      <tr>
      <td><?php echo $hattories->getAge() ?></td>
      </tr>
      <tr>
      <td><<?php echo $hattories->getBirth() ?></td>
      </tr>
    <?php endforeach ?>
    </table>
  </body>
</html>
