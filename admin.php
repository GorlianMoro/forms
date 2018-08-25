<?php
if (is_uploaded_file($_FILES['fileTest']['tmp_name'])) {
  echo "File was loaded";
}

if (!empty($_FILES)) {
  $numbtest = rand(1, 10);
  if ($numbtest == $numbtest)
  {
    $numbtest = rand(1, 100);
  }
  $dir = "Tests/FileTest$numbtest.json";

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
