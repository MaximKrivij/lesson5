<?php

$arr = [2, -5, -9, 15, 11, -4, 7, 1, -10];
$sum = 0;
$min = 0;

foreach ($arr as $v) {
   if($v > 0) {
      $sum += $v;
   }
}

if (!($sum > 0)) {
	echo 'Положительных чисел нету <br>' ;
}

printf ('Сумма положительных чисел: %s<br>', $sum);
echo '<br>';

foreach ($arr as $v1) {
    if ($v1 < 0) {
        $min += $v1;
	}
}

if (!($min < 0)) {
	echo 'отрицательных чисел нету <br>' ;
}

printf ('Сумма отрицательных чисел: %s<br>', $min);

print <<< DOC
<!DOCTYPE html>
<html>
 <body>
  <form action=" " method="POST">
   <p>Укажите число:</p>
   <input type="number" name="numb" <br>
   <input type="submit" value="Ок" name="sub"<br>
  </form>
 </body>
</html>
DOC;

$i = 0;
$a = 0;
$array = [];

if (isset($_POST['sub'])) {
	if (!empty($_POST['numb']))  {
if ($_POST['numb'] > 0) {
    $a = $_POST['numb'];
  

for ($i = 1; $i <= $a; $i++) {  
     if($a % $i==0) {
     $array[] = $i;
   }    
}
print_r ($array);
echo '</br>';
} else {
	echo 'Введите положительное число</br>';
	}
  }
}
print <<< DOC
 <!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Ввод числа</title>
 </head>
  <body>
   <form action=" " method="POST">
    <p>Укажите число от 2 до 200:</p>
    <input type="number" name="number" value="10" min="2" max="200"<br>
   <input type="submit" value="Ок" name="submit"<br>
   </form>
  </body>
</html>
DOC;

$number = 0;
$row = 0;
if (isset($_POST['submit'])) {
	 if (!empty($_POST['number']))  {
     	 $number = $_POST['number'];

for ($row = $number; $row >= 1; $row--) {
     $str = str_repeat('X', $row);
     echo  ' '.$str .' <br/>';
    }
  }
}


