<?php
if (is_uploaded_file($_FILES['fileTest']['tmp_name'])) {
} else {
   echo "Возможная атака с участием загрузки файла: ";
   echo "файл '". $_FILES['fileTest']['tmp_name'] . "'.";
}
$filejson = file_get_contents($_FILES['fileTest']['tmp_name']) or exit('Не удалось получить данные');
$test1file = json_decode($filejson) or exit('Ошибка декодирования json');
$answerfq = $test1file->Test->answers->firstQuestion;
$answersq = $test1file->Test->answers->secondQuestion;
$answertq = $test1file->Test->answers->thirdQuestion;
$answerfouq = $test1file->Test->answers->fourdQuestion;

 ?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Тест</title>
  </head>
  <body>
    <h1>Тесты</h1>
    <form action="test.php" method="post">
      <fieldset>
        <legend><?php echo $test1file->Test->questions->firstQuestion; ?></legend>
        <label> <input type="radio" name="q0"> <?php echo $answerfq->firstVariant; ?> </label>
        <label> <input type="radio" name="q0"> <?php echo $answerfq->secondVariant; ?> </label>
        <label> <input type="radio" name="q0"> <?php echo $answerfq->thirdVariant; ?> </label>
        <label> <input type="radio" name="q0"> <?php echo $answerfq->fourdVariant; ?> </label>
      </fieldset>
      <fieldset>
        <legend><?php echo $test1file->Test->questions->secondQuestion; ?></legend>
        <label> <input type="radio" name="q1"> <?php echo $answersq->firstVariant; ?> </label>
        <label> <input type="radio" name="q1"> <?php echo $answersq->secondVariant; ?> </label>
        <label> <input type="radio" name="q1"> <?php echo $answersq->thirdVariant; ?> </label>
        <label> <input type="radio" name="q1"> <?php echo $answersq->fourdVariant; ?> </label>
      </fieldset>
      <fieldset>
        <legend><?php echo $test1file->Test->questions->thirdQuestion; ?></legend>
        <label> <input type="radio" name="q2"> <?php echo $answertq->firstVariant; ?> </label>
        <label> <input type="radio" name="q2"> <?php echo $answertq->secondVariant; ?> </label>
        <label> <input type="radio" name="q2"> <?php echo $answertq->thirdVariant; ?> </label>
        <label> <input type="radio" name="q2"> <?php echo $answertq->fourdVariant; ?> </label>
      </fieldset>
      <fieldset>
        <legend><?php echo $test1file->Test->questions->fourdQuestion; ?></legend>
        <label> <input type="radio" name="q3"> <?php echo $answerfouq->firstVariant; ?> </label>
        <label> <input type="radio" name="q3"> <?php echo $answerfouq->secondVariant; ?> </label>
        <label> <input type="radio" name="q3"> <?php echo $answerfouq->thirdVariant; ?> </label>
        <label> <input type="radio" name="q3"> <?php echo $answerfouq->fourdVariant; ?> </label>
      </fieldset>
      <input type="submit" name="" value="Отправить">
    </form> <br>
  </body>
</html>
