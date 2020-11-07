<?php
	$con = mysqli_connect("127.0.0.1", "root", "", "instagram");
	mysqli_query($con, "DELETE FROM posts WHERE id='{$_GET['id']}' ");
	$query = mysqli_query($con, "SELECT * FROM instagram");
	header('Location: index.php')
 ?>