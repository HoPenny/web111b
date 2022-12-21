<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>與我聯絡</title>
</head>

<body>
  <form action="#" method="" id="content_form">
    <h1>聯絡表單</h1>
    <p>姓名:<input type="text" name="user"></p>
    <p>電話: <input type="tel" name="tel" id=""></p>
    <p>意見回饋</p>
    <textarea name="suggestion" cols="30" rows="5"></textarea>
    <input type="submit" value="確認"> <input type="reset" value="取消">
  </form>
</body>

</html>
<?php
if (isset($_GET['user']) && isset($_GET['tel']) && isset($_GET['suggestion'])
    && !empty($_GET['user']) && !empty($_GET['tel']) && !empty($_GET['suggestion'])) {
    $user = $_GET["user"];
    $tel = $_GET["tel"];
    $suggestion = $_GET["suggestion"];

    echo "<script>document.getElementById('content_form').style.display = 'none'</script> <br>";
    echo "姓名:{$user} <br>";
    echo "電話:{$tel} <br>";
    echo "意見:{$suggestion} <br>";
}
