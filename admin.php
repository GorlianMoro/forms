<?php
if (is_uploaded_file($_FILES['fileTest']['tmp_name'])) {
  echo "File was loaded";
}

if (!empty($_FILES))
{
  $filet = $_FILES['fileTest']['name'];
  $dir = "Tests/$filet";
  move_uploaded_file($_FILES['fileTest']['tmp_name'], "$dir");
}
else {
  echo "Файл не загружен";
}
 ?>

 <!DOCTYPE html>
 <html lang="ru">
   <head>
     <meta charset="utf-8">
     <title>Админка</title>
   </head>
   <body>
     <form enctype="multipart/form-data" action="admin.php" method="POST">
       <div class="forma">
          <input type="file" name="fileTest" value="Загрузить файл"> <br>
          <input type="submit" name="button" value="Отправить">
       </div>
     </form>
     <a href="list.php">Список тестов</a>
   </body>
 </html>
