<!DOCTYPE html>
<html>

<head>
  <title>資料庫處理_開啟指定的資料庫</title>
</head>

<body>
  <center>
    <h1>資料庫處理_開啟指定的資料庫</h1>
  </center>
  <hr>
  <?php
  //建立MySQL資料庫的連接
  $link = @mysqli_connect(
    'localhost:3306',
    'root',
    ''
  ) or die("無法開啟MySQL資料庫連結!!</br>"); //開啟MySQL主機連接
  //開啟資料庫:school
  $dbname = "school";
  if (!mysqli_select_db($link, $dbname))
    die("無法開啟資料庫: $dbname !!</br>");
  else
    echo "開啟資料庫: $dbname 成功>!!</br";
  //關閉資料庫
  mysqli_close($link);
  ?>
</body>

</html>