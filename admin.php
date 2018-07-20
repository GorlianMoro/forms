<?php
if (is_uploaded_file($_FILES['fileTest']['tmp_name'])) {
  echo "File was loaded";
}

if (!empty($_FILES)) {
  move_uploaded_file($_FILES['fileTest']['tmp_name'], 'list.php');
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
     <title>Админка</title>
   </head>
   <body>
     <form enctype="multipart/form-data" action="list.php" method="POST">
       <div class="forma">
          <input type="file" name="fileTest" value="Загрузить файл"> <br>
          <input type="submit" name="button" value="Отправить">
       </div>
     </form>
     <form enctype="multipart/form-data" action="test.php?testnumber=1" method="POST">
       <div class="forma">
          <input type="file" name="fileTest" value="Загрузить файл"> <br>
          <input type="submit" name="button" value="Отправить">
       </div>
     </form>
     </form>
   </body>
 </html>
