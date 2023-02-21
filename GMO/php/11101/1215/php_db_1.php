<!DOCTYPE html>
<html>

<head>
  <title>資料庫處理_開啟與關閉的資料庫</title>
</head>

<body>
  <center>
    <h1>資料庫處理_開啟與關閉資料庫</h1>
  </center>
  <hr>
  <?php
  //建立MySQL資料庫的連接
  $link = @mysqli_connect(
    'localhost:3306', //MySQL主機名稱
    'root',           //使用者帳號
    '',               //密碼
    'school'          //資料庫名稱
  );

  if (!$link) {  //連接錯誤
    echo "MySQL資料庫連接錯誤，請檢查設定</br>";
    exit();
  } else {
    echo "MySQL資料庫:school連接成功!!</br>";
  }
  //關閉資料庫
  mysqli_close($link);
  ?>
</body>

</html>