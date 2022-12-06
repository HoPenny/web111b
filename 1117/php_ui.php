<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  /* body {
     text-align: center;
  } */
  </style>
</head>

<body>
  <div id="main">
    <form action="http://web111b.com:6080/1117/php_ui.php" method="" id="form1">
      請輸入(row)數 : <input type="text" name="rowcout"><br>


      <input type="submit" value="送出">
    </form>
</body>

</html>
<?php
if (!empty($_GET['rowcout'])) {

    $rowtotal = $_GET['rowcout'];
    // echo $rowtotal;
    for ($row = 1; $row <= $rowtotal; $row++) {
        //echo $row;
        //echo $rowtotal;
        for ($row1 = $rowtotal; $row1 >= $row; $row1--) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<script>document.getElementById('form1').style.display = 'none'</script> <br>";

}
?>
