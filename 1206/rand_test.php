<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1206HomeWork-2</title>
</head>

<body>
  <div id="main">
    <form action="rand_test.php" method="">
      請輸入<input type="number" name="arg1"><br>至<input type="number" name="arg2"><br>
      抽出<input type="number" name="arg3"><br>個幸運數字
      <input type="submit" value="送出">
    </form>
  </div>
</body>

</html>
<?php

if (!empty($_GET['arg1']) && !empty($_GET['arg2']) && !empty($_GET['arg3'])) {
    $arg1 = $_GET["arg1"];
    $arg2 = $_GET["arg2"];
    $arg3 = $_GET["arg3"];
    $temp = [];
    for ($i = 0; $i < $arg3; $i++) {
        // $arg3[$i] = rand($arg1, $arg2);
        $num = rand($arg1, $arg2);

        // echo "幸運號碼為 $num . $b <br>";
        if ($i > 0) {
            if (in_array($num, $temp)) {
                array_push($temp, $num);
            } else {
                $num = rand($arg1, $arg2);
            }
        } else {
            array_push($temp, $num);
        }

        echo "幸運號碼為 $temp[$i] <br>";

    }

}

?>