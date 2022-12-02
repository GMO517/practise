<!DOCTYPE html>
<html>

<head>
  <title>資料庫處理_執行SQL_以分頁方式呈現資料</title>
</head>

<body>
  <center>
    <h1>資料庫處理_執行SQL_以分頁方式呈現資料</h1>
  </center>
  <hr>
  <?php
  $records_per_page = 2; //一頁將顯示幾筆資料
  if (isset($_GET["Pages"])) $pages = $_GET["Pages"]; //若有Pages的參數，將設定頁碼
  else $pages = 1; //若沒有pages參數則頁碼為1
  require_once("school_open.inc"); //將INC檔包含進入
  //送出新的SQL的指令，查詢Classes資料表
  $sql = "SELECT * FROM classes"; //查詢所有學生資料的sql
  echo "SQL查詢字串:$sql</br>";
  $result = mysqli_query($link, $sql); //執行SQL成功->$result


  echo "<center><h3>資料表:students</h3>";
  //取得相關資料表的資訊
  $total_fields = mysqli_num_fields($result);
  //取得資料表總欄數
  echo "總欄數: $total_fields 個欄位</br>";
  $total_records = mysqli_num_rows($result);
  echo "總筆數: $total_records 筆資料</br></center>";
  $total_pages = ceil($total_records / $records_per_page); //總頁數計算 要無條件進位 ceil
  $offset = ($pages - 1) * $records_per_page; //計算目前這頁的第一筆的位置
  mysqli_data_seek($result, $offset); //將資料指標移動到offset的位置


  //將每一筆資料以表格方式一列顯示一筆資料呈現
  echo "<table border=1  cellspacing=0 align=center><tr>";
  //顯示每一欄的欄位，表頭，第一列
  while ($meta = mysqli_fetch_field($result))
    echo "<td>" . $meta->name . "</td>";
  echo "</tr>";
  $j = 1;
  while ($rows = mysqli_fetch_array($result, MYSQLI_NUM) and $j <= $records_per_page) {
    echo "<tr>";
    for ($i = 0; $i < $total_fields; $i++)
      echo "<td>" . $rows[$i] . "</td>";
    echo "</tr>";
    $j++;
  }
  echo "</table></br>";
  echo "<center>";
  if ($pages > 1)
    echo "<a href = 'php_db_6.php?Pages=" . ($pages - 1) . "'>上一頁</a>|"; //顯示上頁頁碼
  for ($i = 1; $i <= $total_pages; $i++)
    if ($i != $pages)
      echo "<a href = 'php_db_6.php?Pages=" . $i . "'>" . $i . "</a>";
    //顯示非當頁的頁碼的超連結
    else
      echo "[" . $i . "]" . " "; //當頁無超連結
  if ($pages < $total_pages)
    echo "|<a href = 'php_db_6.php?Pages=" . ($pages + 1) . "'>下一頁</a>";
  echo "</center>";
  mysqli_free_result($result); //釋放$result的空間

  //關閉資料庫
  mysqli_close($link);
  ?>
</body>

</html>