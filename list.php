<?php
$dir = 'Tests';
$files = scandir($dir);
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
       <?php foreach ($files as $listFile): ?>
         <li><?php echo "Файл ". $listFile ." успешно загружен.\n"; ?><br></li>
       <?php endforeach; ?>
     </ul>

     <ol>
       <?php foreach ($files as $listHref): ?>
         <li> <a href="test.php?tnum=<?php echo $listHref; ?>"><?php echo $listHref; ?></a> </li>
       <?php endforeach; ?>
     </ol>
     <a href="admin.php">Назад</a>
   </body>
 </html>
<?php
 ?>
