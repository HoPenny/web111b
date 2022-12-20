<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  body {
    text-align: center;
  }

  div.welcome {
    color: green;
  }

  div.error {
    color: red;
  }
  </style>
  <script>
  // document.getElementById('login_form').style.display = "none";
  </script>
</head>

<body>
  <form action="php_login.php" method="post" id="login_form">
    會員名稱: <input type="text" name="uname"><br>
    密碼: <input type="password" name="upass"><br>
    <input type="submit" value="登入">

  </form>
</body>

</html>

<?php

$userpass = array('admin' => '12345', 'penny' => '54321');
// if (!empty($_POST['homepage'])) {
//     echo "<script>document.getElementById('login_form').style.display = 'block'</script> <br>";
// }
if (!empty($_POST['uname']) || !empty($_POST['upass'])) {

    $userpass = array('admin' => '12345', 'penny' => '54321');
    $username = $_POST['uname'];
    $passwork = $_POST['upass'];

    $count = 1;
    foreach ($userpass as $key => $value) {
        if ($key == $username) {
            break;
        } else {
            if ($count == count($userpass)) {
                echo "<div class='error'>帳號密碼有誤</div>";
                return;
            }
            $count++;
        }
    }
    if (!$_POST['uname'] || !$_POST['upass']) {
        echo "<div class='error'>請輸入帳號密碼</div>";
    } else {

        if ($userpass[$username] == $passwork) {
            echo "<div class='welcome'>$username 會員你好!</div>";
            echo "您有新留言 </div>";
            echo "<script>document.getElementById('login_form').style.display = 'none'</script> <br>";
            echo "<button type='button' class='btn' id='btn1' οnclick='fun(this)'  value='btn1'>回首頁</button>";
        } else {
            echo "<div class='error'>帳號密碼有誤</div>";

        }

    }

}
