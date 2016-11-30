<?php 
session_start();

$_SESSION['message'] = '';
$_SESSION['correct'] = 0;
$_SESSION['x'] = 0;
$_SESSION['a'] = rand(0,20);
$_SESSION['b'] = rand(0,20);
$_SESSION['sum'] = rand(0,20);
$_SESSION['difference'] = 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Math Game</title>
	<link href = "style/style.css" rel = "stylesheet" type = "text/css">
</head>

<body>
	<div id = "main">
		<h1>Math Game</h1>
		<form action ="" method = "post" >
		<input id="answer" placeholder="Enter answer" type="text">
		<input name="submit" type="submit" value="Submit ">
	</div>

</html>