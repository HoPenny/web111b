<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div id="main">
    <form action="php_preg_math.php" method="POST">
      電話<input type="text" name="phone">
      身分證號<input type="text" name="id_no"><br>
      <input type="submit" value="送出">
    </form>
  </div>
</body>

</html>
<?php
if (isset($_POST['phone']) or !empty($_POST['id_no'])) {

    $phone = $_POST["phone"];
    $id_no = $_POST["id_no"];
    if (!preg_match('/^[0-9]{2}-[0-9]{8}$/', $phone)) {
        echo '電話號碼格式錯誤';
    }
    if (!preg_match('/^[A-Z][1-2]\d{8}$/', $id_no)) {
        echo '身分證號格式錯誤';
    }

}
?>