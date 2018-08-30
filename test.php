<?php
$dir = 'Tests';
$files = scandir($dir);
$ftest = $_GET['tnum'];
if (isset($_GET['tnum']))
{
$filejson = file_get_contents("Tests/$ftest") or exit('Не удалось получить данные');
}
$test1file = json_decode($filejson) or exit('Ошибка декодирования json');
if (isset($_POST['done']))
{
  foreach ($_POST as $answer)
  {
    foreach ($test1file->Test as $anstrue)
    {
      $chkarray = array($anstrue->question => $anstrue->true);
      foreach ($chkarray as $chkarr)
      {
        if ($answer == $chkarr)
        {
          echo "Верно ";
        }
      }
    }
  }
}
 ?>

 <!DOCTYPE html>
 <html lang="ru">
   <head>
     <meta charset="utf-8">
     <title>test</title>
   </head>
   <body>
     <h1>Тест</h1>
     <form action="test.php?tnum=<?php echo $ftest; ?>" method="post">
       <?php foreach ($test1file->Test as $ques ): ?>
         <fieldset>
             <legend>
                 <?php echo $ques->question;?>
             </legend>
             <?php foreach ($ques->answer as $answ): ?>
                 <label> <input type="checkbox" value="<?php echo $answ; ?>" name="<?php echo $ques->question ?>"> <?php echo $answ;?> </label>
             <?php endforeach; ?>
         </fieldset>
       <?php endforeach; ?>
       <input type="submit" name="done" value="Отправить">
     </form> <br>
   </body>
 </html>
