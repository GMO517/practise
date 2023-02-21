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
  //設定SQL查詢字串
  $sql = "SELECT * FROM students";
  echo "SQL查詢字串:$sql </br>";
  //送出MySQL的編碼指令
  mysqli_query($link, "SET CHARACTER SET utf8");
  mysqli_query($link, "SET collation_connection = 'utf8_general_ci'");
  //送出SQL的指令
  $result = mysqli_query($link, $sql); //執行SQL成功->$result
  echo "<center><h3>學生資料列表:</h3></center>";
  //顯示每一筆資料以表格方式一列顯示一筆資料呈現
  echo "<table border = 1, cellspacing = 0 align= center><tr>";
  //顯示每一欄的欄位，表頭，第一列
  while ($meta = mysqli_fetch_field($result))
    echo "<td>" . $meta->name . "</td>"; //顯示欄位名稱
  echo "</tr>";
  //顯示每一筆資料
  $total_fields = mysqli_num_fields($result);
  while ($row = mysqli_fetch_row($result)) {
    echo "<tr>";
    for ($i = 0; $i < $total_fields; $i++) {
      echo "<td>" . $row[$i] . "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
  //關閉資料庫
  mysqli_close($link);
  ?>
</body>

</html>