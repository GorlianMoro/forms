<?php
if (is_uploaded_file($_FILES['fileTest']['tmp_name'])) {
}
else {
   echo "Файл не загружен";
}
if (!empty($_FILES)) {
  move_uploaded_file($_FILES['fileTest']['tmp_name'], 'test.php');
}
 ?>

 <!DOCTYPE html>
 <html lang="ru">
   <head>
     <meta charset="utf-8">
     <title>Список</title>
   </head>
   <body>
     <h1>Список загруженных тестов</h1>
     <ul>
       <li><?php echo "Файл ". $_FILES['fileTest']['name'] ." успешно загружен.\n"; ?><br></li>
     </ul>
     <a href="test.php?testnumber=1">Тест №1</a> <br>
     <a href="test.php?testnumber=2">Тест №2</a> <br>
     <a href="admin.php">Back</a>
   </body>
 </html>
