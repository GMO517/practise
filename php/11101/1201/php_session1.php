<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION["countOK"])) { //Cookie(counter)是否存在?
  $dateStr = date("Y-M-D 23:59:59"); //取得目前的counter
  if (isset($_COOKIE["counter"])) {
    $counter = $_COOKIE["counter"];
    $counter += 1; //+1
    setcookie("counter", $counter, time() + 120);
  } else {
    setcookie("counter", $counter, time() + 120);
    header("Location: php_cookie.php");
  }
  $_SESSION["counterOK"] = 1; //新建SESSION
} else {
  $counter = $_COOKIE["counter"];
}

?>
<html>

<head>
  <title>SESSION_防止灌水</title>
</head>

<body>
  <center>
    <h1>SESSION_防止灌水_瀏覽次數</h1>
  </center>
  <hr>
  <?php
  echo "您今日到目前為止瀏覽本網頁的次數為:" . $counter . "次";
  ?>

</body>

</html>