<!DOCTYPE html>
<?php
$setResult = setcookie("TestCookie", "這是您所使用的Cookie的內容");
//設定新的Cookie => TestCooKie ->$setResult
?>
<html>

<head>
  <title>COOKIE_存取</title>
</head>

<body>
  <center>
    <h1>COOKIE_存取</h1>
  </center>
  <hr>
  <?php
  if (isset($_COOKIE["TestCookie"])) { //是否存在用isset
    echo "Cookie 的內容為:" . $_COOKIE["TestCookie"]; //顯示Cookie內容
  } else {
    echo "Cookie不存在，但現在已經將Cookie設定並儲存成功，請<B><U>[重整頁面]</U></B>";
  }
  ?>

</body>

</html>