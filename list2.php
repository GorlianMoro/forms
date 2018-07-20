<?php
if (is_uploaded_file($_FILES['fileTest']['tmp_name'])) {
  echo $_FILES['fileTest']['name'] . " File was loaded";
}
if (!empty($_FILES)) {
  echo  "Loaded";
}
else {
  echo "Файл не загружен";
}
 ?>
