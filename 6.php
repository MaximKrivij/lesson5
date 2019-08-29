<?php
$a = range(90, 150, 3);
$b = range(150, 90, 3);
$c = array_combine($a, $b);
print_r($c);
$d= array_combine($a, $b);
ksort($d);
 echo "<br />";
    
foreach ($d as $key => $value) {
 echo "$key => $value,";
    echo "<br />";
}