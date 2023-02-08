<!DOCTYPE html>
<?php
$dateStr = date("y-m-d 23:59:59");
//date()取得今日的日期，設定今日的最後時刻為Cookie的保存時刻
if (isset($_COOKIE["counter"])) { //Cookie(counter)是否存在?
  $counter = $_COOKIE["counter"]; //取得目前的counter
  $counter += 1; //+1
  //setcookie("counter", $counter, strtotime($dateStr)); 
  setcookie("counter", $counter, time() + 120); //取得新cookie的值再加上有效時間(2m)
  //回存cookie的值且加上有效期間($datestr)
} else { //Cookie(counter)不存在
  //setcookie("counter", "0", strtotime($dateStr)); //建立新cookie的值且加上有效期間
  setcookie("counter", "0", time() + 120); //建立新cookie的值再加上有效時間(2m)
  header("location: php_cookie2.php"); //重新引導到網頁，重整網頁
}
?>
<html>

<head>
  <title>COOKIE_瀏覽次數</title>
</head>

<body>
  <center>
    <h1>COOKIE_瀏覽次數</h1>
  </center>
  <hr>
  <?php
  echo "您今日到目前為止瀏覽本網頁的次數為:" . $counter . "次";
  ?>

</body>

</html>