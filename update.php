<?php
	$con = mysqli_connect("127.0.0.1", "root", "", "instagram");
	mysqli_query($con, "UPDATE posts SET text='{$_GET['text']}', img='{$_GET['img']}' WHERE id='{$_GET['id']}'");
	$q = mysqli_query($con, "SELECT * FROM instagram");
	header('Location: index.php')
 ?>