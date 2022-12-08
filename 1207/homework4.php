<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1207HomeWork3</title>
</head>

<body>
  <div id="main">
    <form action="homework4.php" method="">
      正整數<input type="number" name="arg1"><br>
      <input type="submit" value="送出">
    </form>
  </div>
</body>

</html>
<?php
if (!empty($_GET['arg1'])) {
    $arg1 = $_GET['arg1'];
    class Show
    {
        public function change($arg1)
        {
            $value = $arg1 % 2;
            if ($value == 1) {
                echo '是奇數<br>';
            } else {
                echo '是偶數<br>';

            }

        }
    }
    $obj = new Show;
    $obj->change($arg1);
}
