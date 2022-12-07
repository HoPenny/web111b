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
      請輸入<input type="number" name="arg1">至<input type="number" name="arg2"><br>
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
    $temp = array();

    for ($i = 0; $i < $arg3; $i++) {
        $num = rand($arg1, $arg2);

        if (in_array($num, $temp)) {
            $i--;
        } else {
            array_push($temp, $num);

        }

    }
    asort($temp);
    $m_value = implode(',', $temp);
    echo "幸運號碼為" . $m_value . "<br>";

}

?>
