<?php

error_reporting(E_ALL);

// print_r(error_reporting(E_ALL));

// error_reporting(-1);

// error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

include_once('conection.php');

$id = $_GET['id'];


// $_SERVER['SERVER_NAME'];

// $name = $_GET['name'];

// $first_name = $_POST['first_name'];

// $last_name = $_POST['last_name'];

// print_r($_SERVER['HTTP_HOST']); 

// print_r($name);

// print_r($first_name);

// $query= "insert into users(first_name,last_name)
// values('maria','chacin')"; 

// $query= "INSERT INTO `users`(`first_name`, `last_name`) VALUES (".$_POST['first_name'].",".$_POST['last_name']."')"; 

// $query = "INSERT INTO users ('first_name', 'last_name')
//            VALUES ('{$_POST['first_name']}','{$_POST['last_name']}')"; 


// $query ="DELETE from users
// WHERE id = 3";

// $query ="DELETE from users
// WHERE id = {$id}";

// $query ="UPDATE users set last_name = 'chacon'
// WHERE id = {$id}";

$query ="SELECT * FROM users as u             
left join courses as c on c.id_course = u.id_course		
where u.id = '{$id}'";




$result = $db->query($query);

// print_r($result);

if ($id > 2) {
	throw new \Exception('Este curso no pertenece a este usuario');
}

while ($row = $result->fetch_assoc()) {
	echo $row['first_name'];

	echo "<br>";

	echo $row['last_name'];

	echo "<br>";
}

?> 


<!-- <form method="post" action="register.php">





    <input  name="first_name" required type="text"/>

    <input  name="last_name" required type="text"/>

    <input type="submit">




</form>
-->
