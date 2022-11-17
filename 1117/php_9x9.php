<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table align="center" border="1" style="border-collapse: collapse;">
    <!-- <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr> -->
</body>

</html>
<?php
for ($row = 1; $row <= 9; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 9; $col++) {
        echo "<td> $row  * $col = " . $row * $col . "</td>";
    }
    echo "</td><br>";
}
echo "</table>";
?>
