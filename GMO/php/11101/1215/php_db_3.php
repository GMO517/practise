<!DOCTYPE html>
<html>

<head>
  <title>資料庫處理_執行SQL並顯示部分的資料</title>
</head>

<body>
  <center>
    <h1>資料庫處理_執行SQL並顯示部分的資料</h1>
  </center>
  <hr>
  <?php
  //建立MySQL資料庫的連接
  $link = @mysqli_connect(
    'localhost:3306',
    'root',
    '',
    'school'
  ) or die("無法開啟MySQL資料庫連結!!</br>"); //開啟MySQL主機連接
  //開啟資料庫:school
  echo "資料庫: school開啟成功";
  $sql = "SELECT * FROM students";
  echo "SQL查詢字串:$sql </br>";
  mysqli_query($link, "SET CHARACTER SET utf8");
  mysqli_query($link, "SET collation_connection = 'utf8_general_ci'");
  if ($result = mysqli_query($link, $sql)) {
    echo "<center><h3>學生資料列表:</h3></center>";
    echo "學號-姓名</br>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row["sid"] . "-" . $row["name"] . "</br>";
    }
    mysqli_free_result($result); //釋放$result的空間
  }
  //關閉資料庫
  mysqli_close($link);
  ?>
</body>

</html>