<?php
//1)
$num >= 1;
$num <= 4;
switch($num){

case 1:
$result = 'зима';
break;

case 2:
 $result = 'весна';
break;

case 3:
 $result = 'лето';
break;

case 4:
 $result = 'осень';
break;
} 
//2)
$day >= 1;
$day <= 31; 
if($day >=1 & $day <=10){
echo 'Декада:1';
}
elseif($day >=11 & $day <=20){
echo 'Декада:2';
}
elseif($day >=21 & $day <=31){
echo 'Декада:3';
}
//3)
$month >= 1;
$month <= 12;
$month = 11;
if($month >= 3 & $month <= 5){
echo 'весна';
}
elseif($month >= 6 & $month <= 8){
echo 'лето';
}
elseif($month >= 9 & $month <= 11){
echo 'осень';
}
elseif($month <= 1 & $month <= 2 || $month = 12){
echo 'зима';
}
