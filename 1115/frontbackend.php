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
    <form action="http://web111b.com:6080/1115/backend.php" method="">
      使用者 : <input type="text" name="user"><br>
      <!--密&emsp;碼 : <input type="password" name="pws" size=12><br>-->
      &nbsp;&nbsp;email : <input type="email" name="email"><br>
      學&emsp;歷 : <select name="edu">
        <option value="國小">國小</option>
        <option value="國中">國中</option>
        <option value="高中">高中</option>
        <option value="大學">大學</option>
        <option value="其他">其他</option>
      </select><br>
      喜&emsp;好 :
      <input type="checkbox" name="hobbys[]" value="吃">吃<br>
      &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="hobbys[]" value="喝">喝<br>
      &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="hobbys[]" value="玩">玩<br>
      &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="hobbys[]" value="樂">樂<br>
      <!-- 來&emsp;源 :
      <select name="webs[]" size=4 multiple="True">
        <option value="s1" selected="True">Yahoo!</option>
        <option value="s2">PC Home Online</option>
        <option value="s3">Google</option>
        <option value="s4">facebook</option>
      </select><br>-->
      <br>
      &emsp;&emsp;<input type="reset" value="取消">&emsp;<input type="submit" value="送出">
    </form>
  </div>
</body>

</html>

<?php
if (isset($_GET['user']) && isset($_GET['email']) && isset($_GET['edu']) && isset($_GET['hobby'])
    && !empty($_GET['user']) && !empty($_GET['email']) && !empty($_GET['edu']) && !empty($_GET['hobby'])) {
    $user = $_GET["user"];
    $email = $_GET["email"];
    $edu = $_GET["edu"];
    $hobbys = $_GET["hobbys"];

    $h = implode("、", $hobbys);

    echo "使用者:{$user} 他的emal:{$email} 學歷是 {$edu} 嗜好是{$h}";
}