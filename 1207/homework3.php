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
    <form action="homework3.php" method="">
      身高<input type="number" name="arg1">cm,體重<input type="number" name="arg2">kg<br>
      <input type="submit" value="換算">
    </form>
  </div>
</body>

</html>
<?php
if (!empty($_GET['arg1']) && !empty($_GET['arg2'])) {
    $h = $_GET['arg1'];
    $w = $_GET['arg2'];
    class Show
    {
        const ch = 2.54;
        const bw = 0.454;
        public function change($h, $w)
        {

            echo "身高" . Round($h / Show::ch, 2) . "英吋,體重" . Round($w / Show::bw, 2) . "磅<br>";

        }
    }
    $obj = new Show;
    $obj->change($h, $w);
}