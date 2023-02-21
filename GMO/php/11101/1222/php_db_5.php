<!DOCTYPE html>
<html>

<head>
  <title>資料庫處理_執行SQL_顯示資料表及所有欄位的資料</title>
</head>

<body>
  <center>
    <h1>資料庫處理_執行SQL_顯示資料表及所有欄位的資料</h1>
  </center>
  <hr>
  <?php
  require_once("school_open.inc");
  $result = mysqli_query($link, $sql); //執行SQL成功->$result
  if ($result) {
    echo "<center><h3>資料表:students</h3>";
    //取得相關資料表的資訊
    $total_fields = mysqli_num_fields($result);
    //取得資料表總欄數
    echo "總欄數: $total_fields 個欄位</br>";
    $total_records = mysqli_num_rows($result);
    echo "總筆數: $total_records 筆資料</br></center>";
    //取得資料表的總筆數

    //將每一筆資料以表格方式一列顯示一筆資料呈現
    echo "<table border=1  cellspacing=0 align=center><tr>";
    //顯示每一欄的欄位，表頭，第一列
    echo "<tr><td>欄位名稱</td><td>資料表</td>";
    echo "<td>最大長度</td><td>資料類型</td></tr>";
    while ($meta = mysqli_fetch_field($result)) {
      echo "<tr><td>" . $meta->name . "</td>";  //取得欄位名稱
      echo "<td>" . $meta->table . "</td>";     //取得資料表名稱
      echo "<td>" . $meta->max_length . "</td>";     //取得欄位的最大長度
      echo "<td>" . $meta->type . "</td></tr>";     //取得欄位的資料型態
    }
    echo "</table>";
    mysqli_free_result($result); //釋放$result的空間
  }
  //關閉資料庫
  mysqli_close($link);
  ?>
</body>

</html>