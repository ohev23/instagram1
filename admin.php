<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<form action="insert.php" method="GET">
		<div class="col-6 mx-auto">
			<div  class="col-6 mx-auto">
				<h4>Ник</h4>
				<input type="" name="user" class="form-control" placeholder="напишите ник">
			</div>
			<div class="col-6 mx-auto">
				<h4>Описание</h4>
				<input type="" name="text" class="form-control" placeholder="напишите описание">
			</div>
			<div class="col-6 mx-auto">
				<h5>Загрузите картинку</h5>
				<input type="file" name="img">
			</div>
			<div class="col-6 mx-auto">
				<button class="btn btn-outline-secondary mt-2">Опубликовать</button>
			</div>
		</div>
			
	</form>
	
</body>
</html>