<?php
  echo 5+7;
?>

<?php
  echo '5+7';
?>

<?php
  $fruit = 'りんご';
  echo $fruit;

?>

<?php
  $sum = 8+9;
  echo $sum;
?>

<?php
  $x += 10;
  echo $x;
?>

<?php
  $y *= 5;
  echo $y;
?>

<?php
  $a++;
  echo $a;
?>

<?php
  $b--;
  echo $b;
?>

<?php
  'こんにちは!'.$name;
?>

<?php
  if($x>9800){
    echo "変数xは9800より大きいです。";
  }

  if($y>6000){
    echo "変数yは6000より大きいです。";
  }
?>

<?php
  $age = 22;
  if($age>=30){
    echo "あなたは30歳以上です。";
  }else{
    echo "あなたは30歳未満です。";
  }
?>

<?php
  if($x % 3 == 0 && $x % 7 ==0){
    echo 'xは3の倍数かつ7の倍数です。';
  }elseif($x % 3 == 0){
    echo 'xは3の倍数ですが7の倍数ではありません。';
  }elseif($x % 7 == 0){
    echo 'xは7の倍数ですが3の倍数ではありません。';
  }else{
    echo 'xは7の倍数でも3の倍数でもありません。';
  }
?>

<?php
  $num = 1;
  $remainder = $num % 3;

  switch($remainder){
    case 0:
      echo "大吉です。";
      break;
    case 1:
      echo "中吉です。";
      break;
    case 2:
      echo "小吉です。";
      break;
    default:
      echo "凶です。";
      break;
  }
?>

<?php
  $colors = array('赤', '青', '黄');
  echo $colors[0];
  $colors[]='白';
  echo $colors[3];
?>

<?php
  $scores = array('数学'=>70, '英語'=>90, '国語'=>80);
  $scores['国語'] += 5;
  echo $scores['国語'];
?>

<?php
  for ($i=51; $i <= 100; $i++){
    echo $i.'<br>';
  }
?>

<?php
  for ($i=51; $i <= 100; $i++){
    echo $i;
    echo '<br>';
  }
?>

<?php
  $i = 2;
  
  while($i <= 100){
    echo $i;
    echo '<br>';
    $i += 2;
  }
?>

<?php
  for ($i=1; $i<=1000; $i++){
    if($i > 500){
      break;
    }

    echo $i;
    echo '<br>';
  }
?>

<?php
  for ($i=1; $i<=1000; $i++){
    if($i % 3 == 0){
      continue;
    }

    echo $i;
    echo '<br>';
  }
?>

<?php
      foreach($scores as $key => $value){
        echo $key.'は'.$value.'点です。';
      }

?>

<?php
  echo strlen($str);

  echo count($array);

  echo rand(10,15);
?>

<?php
  function hello(){
    echo 'Hello, world!';
  }

  hello();

  function printRectangleArea($height, $width){
    echo $height * $width;
  }

  printRectangleArea(5, 10);
?>

<?php
  function getCircleArea($radius){
    return $radius * $radius * 3;
  }

  $circleArea=getCircleArea(5);

  echo $circleArea;
?>

<?php
  
?>

<form action="sent.php" method="post"></form>

<input type="text" name="name">
<textarea name="body"></textarea>

<input type="submit" value="送信">

<select name="age">
  <option value="未選択">選択してください</option>
  <option value="20代">20代</option>
  <option value="30代">30代</option>
</select>

for ($i=6; $i<=100; $i++){
  echo "<option value='{$i}'>{$i}</option>";
}

<select name="category">
  <option value="未選択">選択してください</option>
  <?php
  foreach ($types as $type){
  echo "<option value='{$type}'>{$type}</option>";
}
?>
</select>

<?php
  class Menu {

  }

  $curry = new Menu();
  $pasta = new Menu();
?>

public $name;

$curry->name = 'CURRY';
$pasta->name = 'PASTA';

echo $curry->name;

echo $pasta->name;

<?php
  
?>