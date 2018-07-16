<?php
if (!empty($_FILES)) {
  move_uploaded_file($_FILES['files']['tmp_name'], 'list.php');
  move_uploaded_file($_FILES['filees']['tmp_name'], 'list.php');
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
          <input type="file" name="files" value="Загрузить файл"> <br>
          <input type="file" name="filees" value="Загрузить файл"> <br>
          <input type="submit" name="button" value="Отправить">
       </div>
     </form>
   </body>
 </html>
