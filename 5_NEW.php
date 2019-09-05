 <?php
 $array = array( 
 'a1' => array('id'=>'1', 'age'=>'16', 'gender'=>'m', 'login'=>'Вася'), 
 'a2' => array('id'=>'2', 'age'=>'18', 'gender'=>'m', 'login'=>'Петя'), 
 'a3' => array('id'=>'3', 'age'=>'20', 'gender'=>'g', 'login'=>'Катя'), 
 'a4' => array('id'=>'4', 'age'=>'20', 'gender'=>'m', 'login'=>'Стас'), 
 'a5' => array('id'=>'5', 'age'=>'12', 'gender'=>'g', 'login'=>'Маша'), 
 'a6' => array('id'=>'6', 'age'=>'44', 'gender'=>'g', 'login'=>'Галя'), 
 'a7' => array('id'=>'7', 'age'=>'45', 'gender'=>'m', 'login'=>'Макс'), 
 'a8' => array('id'=>'8', 'age'=>'20', 'gender'=>'m', 'login'=>'Илья'), 
 'a9' => array('id'=>'9', 'age'=>'20', 'gender'=>'g', 'login'=>'Даша'), 
 );
$age = '';
$gender = '';
foreach ($array as $key) {
$age  = array_column($array, 'age');
$gender = array_column($array, 'gender');
}
print <<< DOC
<!DOCTYPE html>
<html>
 <body>
   <form action=" " method="post">
    <p>Отсортировать масив по:</p>
	<input type="radio" name="asc" value="asc">Возростанию<Br>
   <input type="radio" name="desc" value="desc"> Убыванию<Br>
    <p><input type="submit" value="Ок" name="submit"></p>
   </form>
 </body>
</html>
DOC;

if (isset($_POST['submit'])) {
	if (!empty($_POST['asc'])) {
        array_multisort($age, SORT_ASC, $gender, SORT_DESC, $array);
} elseif (!empty($_POST['desc'])) {
          array_multisort($age, SORT_DESC, $gender, SORT_ASC, $array); 
	     }
}
print_r ($array);
	



	 
	

	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	