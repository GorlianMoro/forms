<?php
$dir = '/OSPanel/domains/localhost/dz6/Tests';
$files = scandir($dir);

$ftest = $_GET['tnum'];

if (isset($_GET['tnum']))
{
$filejson = file_get_contents("Tests/$ftest") or exit('Не удалось получить данные');
}
$test1file = json_decode($filejson) or exit('Ошибка декодирования json');

if (isset($_POST['done']))
{

  if ($ftest == $files[2])
  {
    if ($_POST['q3'] == 'on')
    {
      echo "На первый вопрос ответ правильный" . "<br>";
    }
    if ($_POST['q6'] == 'on')
    {
      echo "На второй вопрос ответ правильный" . "<br>";
    }
    if ($_POST['q10'] == 'on')
    {
      echo "На третий вопрос ответ правильный" . "<br>";
    }
    if ($_POST['q16'] == 'on')
    {
      echo "На четвертый вопрос ответ правильный" . "<br>";
    }
  }

  if ($ftest == $files[3])
  {
    if ($_POST['q2'] == 'on')
    {
      echo "На первый вопрос ответ правильный" . "<br>";
    }
    if ($_POST['q5'] == 'on')
    {
      echo "На второй вопрос ответ правильный" . "<br>";
    }
    if ($_POST['q12'] == 'on')
    {
      echo "На третий вопрос ответ правильный" . "<br>";
    }
    if ($_POST['q15'] == 'on')
    {
      echo "На четвертый вопрос ответ правильный" . "<br>";
    }
  }
}
 ?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Тест</title>
  </head>
  <body>
    <h1>Тесты</h1>
      <form action="test.php?tnum=<?php echo $ftest; ?>" method="post">
        <?php foreach ($test1file->Test as $field ): ?>
          <fieldset>
              <legend><?php echo $field->field1[0]->firstQuestion;?></legend>
              <label> <input type="checkbox" name="q1"> <?php echo $field->field1[0]->FQ[0]; ?>
              <label> <input type="checkbox" name="q2"> <?php echo $field->field1[0]->FQ[1]; ?>
              <label> <input type="checkbox" name="q3"> <?php echo $field->field1[0]->FQ[2]; ?>
              <label> <input type="checkbox" name="q4"> <?php echo $field->field1[0]->FQ[3]; ?> </label>
          </fieldset>
          <fieldset>
            <legend><?php echo $field->field2[0]->secondQuestion;?></legend>
            <label> <input type="checkbox" name="q5"> <?php echo $field->field2[1]->SQ[0]; ?>
            <label> <input type="checkbox" name="q6"> <?php echo $field->field2[1]->SQ[1]; ?>
            <label> <input type="checkbox" name="q7"> <?php echo $field->field2[1]->SQ[2]; ?>
            <label> <input type="checkbox" name="q8"> <?php echo $field->field2[1]->SQ[3]; ?> </label>
          </fieldset>
          <fieldset>
            <legend><?php echo $field->field3[0]->thirdQuestion;?></legend>
            <label> <input type="checkbox" name="q9"> <?php echo $field->field3[1]->TQ[0]; ?>
            <label> <input type="checkbox" name="q10"> <?php echo $field->field3[1]->TQ[1]; ?>
            <label> <input type="checkbox" name="q11"> <?php echo $field->field3[1]->TQ[2]; ?>
            <label> <input type="checkbox" name="q12"> <?php echo $field->field3[1]->TQ[3]; ?> </label>
          </fieldset>
          <fieldset>
            <legend><?php echo $field->field4[0]->fourdQuestion;?></legend>
            <label> <input type="checkbox" name="q13"> <?php echo $field->field4[1]->FOUQ[0]; ?>
            <label> <input type="checkbox" name="q14"> <?php echo $field->field4[1]->FOUQ[1]; ?>
            <label> <input type="checkbox" name="q15"> <?php echo $field->field4[1]->FOUQ[2]; ?>
            <label> <input type="checkbox" name="q16"> <?php echo $field->field4[1]->FOUQ[3]; ?> </label>
          </fieldset>
        <?php endforeach; ?>
        <input type="submit" name="done" value="Отправить">
      </form> <br>
  </body>
</html>
