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
    <form action="homework5.php" method="">
      DECOMP<input type="text" name="arg1"><br>
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
        public function decomp($arg1)
        {
            $str = str_split($arg1);
            foreach ($str as $value) {
                echo $value . " ";

            }
        }

    }
    $obj = new Show;
    $obj->decomp($arg1);
}