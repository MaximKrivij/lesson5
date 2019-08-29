<?php
echo'1)';
 echo'<br>';
 $arr = [2, -5, -9, 15, 11, -4, 7, 1, -10];
//1)
 $sum = 0;
$min = 0;
foreach($arr as $v)
{
   if($v > 0)
        $sum += $v;
}
printf('Сумма положительных чисел: %s<br>', $sum);

echo'<br>';
foreach($arr as $v)
{
    if($v < 0)
        $min += $v;
}
printf('Сумма отрицательных чисел: %s<br>', $min);
echo'<br>';
//2)
echo'2)';
echo'<br>';
$a=2048;
$array=[];
 for ($i=1; $i<=$a; $i++){  
if($a % $i==0){
  $array[] = $i;
}    
}
print_r($array);
echo'<br>';
echo'<br>';
//3)
echo'3)';
echo'<br>';
$number = 15;
for($row=$number; $row>=1;$row--) {
        $str = str_repeat('X', $row);
        echo $space . $str . '<br/>';
}




