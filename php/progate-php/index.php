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
  
?>