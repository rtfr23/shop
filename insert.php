<?php
	$title = $_GET["title"];
	$info = $_GET["info"];
	$price = $_GET["price"];
	$img = $_GET["img"];
	$con = mysqli_connect('127.0.0.1', 'root', "", "market");
	mysqli_query($con, "INSERT  INTO products (img, title, info, price) VALUES ('$img', '$title', '$info', '$price')");
	header('Location: index.php');
?>