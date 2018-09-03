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
    if ($test1file->Test[0]->true == $answer)
    {
      echo "Первый ответ верный" . '<br>';
    }
    if ($answer == $test1file->Test[1]->true)
    {
      echo "Второй ответ верный ";
    }
    if ($test1file->Test[2]->true == $answer)
    {
      echo "Третий ответ верный ";
    }
    if ($test1file->Test[3]->true == $answer)
    {
      echo "Четвертый ответ верный ";
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
                 <label> <input type="radio" value="<?php echo $answ; ?>" name="<?php echo $ques->question ?>"> <?php echo $answ;?> </label>
             <?php endforeach; ?>
         </fieldset>
       <?php endforeach; ?>
       <input type="submit" name="done" value="Отправить">
     </form> <br>
   </body>
 </html>
