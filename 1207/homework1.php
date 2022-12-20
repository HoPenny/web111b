<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1207HomeWork1</title>
</head>

<body>
  <div id="main">
    <form action="homework1.php" method="">
      Square(<input type="number" name="arg1">,<input type="TEXT" name="arg2">)<br>
      <input type="submit" value="送出">
    </form>
  </div>
</body>

</html>
<?php
if (!empty($_GET['arg1']) && !empty($_GET['arg2'])) {
    $n = $_GET['arg1'];
    $c = $_GET['arg2'];
    class ShowPic
    {
        public function square($n, $c)
        {
            for ($i = 1; $i <= $n; $i++) {

                for ($j = 1; $j <= $n; $j++) {
                    echo $c;
                }
                echo "<br>";

            }
        }
    }
    $obj = new ShowPic;
    $obj->square($n, $c);
}
