<?php
$dir = 'Tests';
$files = scandir($dir);

var_dump($_POST);

print_r($_POST['q1']);

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
    if ($_POST['1000'] == 'on')
    {
      echo "На первый вопрос ответ правильный" . "<br>";
    }
    if ($_POST['1/2'] == 'on')
    {
      echo "На второй вопрос ответ правильный" . "<br>";
    }
    if ($_POST['1'] == 'on')
    {
      echo "На третий вопрос ответ правильный" . "<br>";
    }
    if ($_POST['-cos(x)+С'] == 'on')
    {
      echo "На четвертый вопрос ответ правильный" . "<br>";
    }
  }

  if ($ftest == $files[3])
  {
    if ($_POST['Язык_разметки_страницы'] == 'on')
    {
      echo "На первый вопрос ответ правильный" . "<br>";
    }
    if ($_POST['Определяет_абзац_текста'] == 'on')
    {
      echo "На второй вопрос ответ правильный" . "<br>";
    }
    if ($_POST['Каскадная_таблица_стилей'] == 'on')
    {
      echo "На третий вопрос ответ правильный" . "<br>";
    }
    if ($_POST['Цвет_фона_элемента'] == 'on')
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
              <?php foreach ($field->field1[0]->FQ as $answ): ?>
                  <label> <input type="checkbox" name="<?php echo $answ; ?>"> <?php echo $answ; ?> </label>
              <?php endforeach; ?>
          </fieldset>
          <fieldset>
            <legend><?php echo $field->field2[0]->secondQuestion;?></legend>
            <?php foreach ($field->field2[1]->SQ as $answ2): ?>
                <label> <input type="checkbox" name="<?php echo $answ2; ?>"> <?php echo $answ2; ?> </label>
            <?php endforeach; ?>
          </fieldset>
          <fieldset>
            <legend><?php echo $field->field3[0]->thirdQuestion;?></legend>
            <?php foreach ($field->field3[1]->TQ as $answ3): ?>
                <label> <input type="checkbox" name="<?php echo $answ3; ?>"> <?php echo $answ3; ?> </label>
            <?php endforeach; ?>
          </fieldset>
          <fieldset>
            <legend><?php echo $field->field4[0]->fourdQuestion;?></legend>
            <?php foreach ($field->field4[1]->FOUQ as $answ4): ?>
                <label> <input type="checkbox" name="<?php echo $answ4; ?>"> <?php echo $answ4; ?> </label>
            <?php endforeach; ?>
          </fieldset>
        <?php endforeach; ?>
        <input type="submit" name="done" value="Отправить">
      </form> <br>
  </body>
</html>
