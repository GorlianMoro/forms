<?php
if (is_uploaded_file($_FILES['files']['tmp_name'])) {
} else {
   echo "Возможная атака с участием загрузки файла: ";
   echo "файл '". $_FILES['files']['tmp_name'] . "'.";
}
if (is_uploaded_file($_FILES['filees']['tmp_name'])) {
} else {
   echo "Возможная атака с участием загрузки файла: ";
   echo "файл '". $_FILES['filees']['tmp_name'] . "'.";
}
if (!empty($_FILES)) {
  move_uploaded_file($_FILES['fileTest']['tmp_name'], 'test.php');
}
else {
  echo "Файл не загружен";
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
       <li><?php echo "Файл ". $_FILES['files']['name'] ." успешно загружен.\n"; ?><br></li>
       <li><?php echo "Файл ". $_FILES['filees']['name'] ." успешно загружен.\n"; ?></li>
     </ul>
     <form enctype="multipart/form-data" action="test.php" method="POST">
       <div class="forma">
          <input type="file" name="fileTest" value="Загрузить файл"> <br>
          <input type="submit" name="button" value="Запустить тест">
       </div>
     </form>
   </body>
 </html>
