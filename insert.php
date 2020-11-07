<?php
	$con = mysqli_connect("127.0.0.1", "root", "", "instagram");
	mysqli_query($con, "INSERT INTO posts (img, user, text) VALUES ('".$_GET['img']."','".$_GET['user']."', '".$_GET['text']."')");
	header('location:index.php');
 ?>