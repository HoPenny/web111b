<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1207HomeWork2</title>
</head>

<body>
  <div id="main">
    <form action="homework2.php" method="">
      F(<input type="number" name="arg1">,<input type="number" name="arg2">)<br>
      <input type="submit" value="送出">
    </form>
  </div>
</body>

</html>
<?php
if (!empty($_GET['arg1']) && !empty($_GET['arg2'])) {
    $n = $_GET['arg1'];
    $c = $_GET['arg2'];
    class Show
    {
        public function f_func($n, $c)
        {
            for ($i = 1; $i <= $c; $i++) {
                $tmp = $i * $n;
                for ($j = $i; $j <= $tmp; $j += $i) {
                    echo " " . $j;
                }
                echo "<br>";

            }
        }
    }
    $obj = new Show;
    $obj->f_func($n, $c);
}