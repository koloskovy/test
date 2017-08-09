<?php 
phpinfo();

require __DIR__ . '/models/photo.php';
require __DIR__ . '/functions/file.php';


 ?>


 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Views</title>
</head>
<body>
<!-- Перенесем эту форму в form.php
    <form action="add.php" method="post" enctype="multipart/form-data">
	<label for="title">Название</label>
	<input type="text" id="title" name="title" >
	<br>
	<label for="image">Файл</label>
	<input type="file" id="image" name="image" >
	<br>
	<input type="submit">




</form> -->

<!--А здесь подключаем файл form.php -->
<?php 

include __DIR__ . '/form.php';

 ?>


<a href="./">На главную</a>
	

	
</body>
</html>



1234500000000000000000000000000