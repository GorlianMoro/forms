<?php
if (is_uploaded_file($_FILES['fileTest']['tmp_name'])) {
}
else {
   echo "Файл не загружен";
}
$filejson = file_get_contents($_FILES['fileTest']['tmp_name']) or exit('Не удалось получить данные');
$test1file = json_decode($filejson) or exit('Ошибка декодирования json');
//$answerfq = $test1file->Test->answers->firstQuestion;
//$answersq = $test1file->Test->answers->secondQuestion;
//$answertq = $test1file->Test->answers->thirdQuestion;
//$answerfouq = $test1file->Test->answers->fourdQuestion;
 ?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Тест</title>
  </head>
  <body>
    <h1>Тесты</h1>
    <?php
    if ($_GET = 1) {?>
      <form action="test.php?testnumber=1" method="post">
        <?php foreach ($test1file->Test->questions as $question ): ?>
          <fieldset>
              <legend><?php echo $question; ?></legend>

              <?php foreach ($test1file->Test->answers as $answquest) {
                foreach ($answquest->A as $varik) {
                  do {?>
                    <label> <input type="radio" name="q1"> <?php echo $varik; ?> </label>
                  <?php break; } while ($question == [0]);
               }?>

            <?php  } ?>
          </fieldset>
        <?php endforeach; ?>
        <input type="submit" name="" value="Отправить">
      </form> <br>
    <?php  } ?>
  </body>
</html>
