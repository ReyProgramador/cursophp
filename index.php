<?php

// include("include/header.php");

// include("include/conection.php");

include_once('include/conection.php');

include_once('include/register.php');

$query= "SELECT * FROM `users`";  


$result = $db->query($query);


// print_r($result);

// while ($row = $result->fetch_assoc()) {
// 	 echo $row['first_name'];

// 	 echo "<br>";

// 	 echo $row['last_name'];

// 	 echo "<br>";
// }


// echo COURSE;

$first_name = "Jonathan";

$last_name = "Castro";

$age = 44;

$a = array("cero","uno","dos");

$b = array("tres","cuatro","cinco");

$merge = array_merge($a,$b);


$DATE = date("y-m-d");

// echo $DATE;





// if ($age == 34) {

// 	echo "si esa es tu edad";
// }else{

// 	echo "tu edad es".$age;
// }

// $a = array(1,2,3);


// switch ($a[1]) {
// 	case 1:

// 	echo "cero";

// 	break;

// 	case 2:

// 	echo "uno";

// 	break;

// 	default:

// 	echo "cuatro";

// 	break;
// }

// $merge = array_push($a,"tres");

// print_r($merge);

exit;

echo "<br>";

print_r($a[0]);

echo "<br>";

print_r($a[1]);

echo "<br>";

print_r($a[2]);

// exit;

// print_r($first_name);

echo "hola mundo";

// exit;

echo "<br>";

echo $first_name.' '.$last_name.' '.$age;

/* esto es comentario largo
echo "<h1>Titulo adaptado al SEO</h1>";

print_r("curso php: instructor Jonathan Castro");

echo "<br>";

echo "<h2>Titulo adaptado al SEO nro 2</h2>";
*/

// var_dump("Hola test");

// echo "<p>Curso Jonathan Castro 2023</p>";

?>

