<!-- 
Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:

22 часа 15 минут
21 час 43 минуты -->
<?php
echo '<h3>Задание 1</h3><br>';
$a = rand(-10, 10);
$b = rand(-10, 10);
echo "a = $a, b = $b<br>";
if ($a >= 0 && $b >= 0) {
  echo 'a - b = '.($a - $b);
} elseif ($a < 0 && $b < 0) {
  echo 'a x b = '.($a * $b);
} else {
  echo 'a + b = '.($a + $b);
}

echo '<br><h3>Задание 2</h3><br>';
$a = rand(0, 15);
echo "a = $a <br>";
switch ($a){
  case 1: echo '1 ';
  case 2: echo '2 ';
  case 3: echo '3 ';
  case 4: echo '4 ';
  case 5: echo '5 ';
  case 6: echo '6 ';
  case 7: echo '7 ';
  case 8: echo '8 ';
  case 9: echo '9 ';
  case 10: echo '10 ';
  case 11: echo '11 ';
  case 12: echo '12 ';
  case 13: echo '13 ';
  case 14: echo '14 ';
  default: echo '15';
}

echo '<br><h3>Задания 3, 4</h3><br>';
function add ($x = 0, $y = 0){
  return $x + $y;
}
function sub ($x = 0, $y = 0){
  return $x - $y;
}
function mult ($x = 0, $y = 0){
  return $x * $y;
}
function div ($x = 0, $y = 0){
    if ($y == 0){
      return $x >= 0 ? 'Infinity':'-Infinity';
    }
    return $x / $y;
  }

function mathOperation($arg1, $arg2, $operation){
  switch ($operation) {
    case '+':
      return add($arg1, $arg2);
    case '-':
      return sub($arg1, $arg2);
    case '*':
      return mult($arg1, $arg2);
    case '/':
      return div($arg1, $arg2);
  }
}

$a = rand(-10, 10);
$b = rand(-10, 10);
$operations = ['+', '-', '*', '/'];
$operation = $operations[rand(0, 3)];
echo "$a $operation $b = ".mathOperation($a, $b, $operation);

echo '<br><h3>Задание 6</h3><br>';
function power($val, $pow) {
  if ($pow > 1) {
    return power($val, --$pow) * $val;
  } elseif ($pow == 1) {
    return $val;
  } elseif ($pow == 0) {
    return 1;
  }
}

$a = rand(-10, 10);
$b = rand(0, 5);
echo "$a^$b = ".power($a, $b);

echo '<br><h3>Задание 7</h3><br>';

function russianTime(){
  $h = date('G');
  $m = date('i');
  $s = date('s');

  function wordForm ($x){
    if($x <= 20 && $x >= 5 || $x % 10 >= 5 || $x % 10 == 0){
    return 2;
    }
    if ($x %10 == 1){
      return 0;
    }
    return 1;
  }

    return 'Сейчас '.$h.[' час', ' часа', ' часов'][wordForm($h)].' '.$m.[' минута', ' минуты', ' минут'][wordForm($m)].' '.$s.[' секунда', ' секунды', ' секунд'][wordForm($s)];

}
echo russianTime();
  
?>