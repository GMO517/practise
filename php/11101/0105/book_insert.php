<?php
require_once("dbconnectbook.inc");
//刪除資料的SQL
$sql = "INSERT INTO mybooks (bookname, author, price) VALUES (";
$sql .= "'" . $_POST["bookname"] . "',"; //書籍名稱
$sql .= "'" . $_POST["author"] . "',"; //書籍作者
$sql .= "'" . $_POST["price"] . "')"; //書籍價格 注意最後空白
//echo $sql . "</BR>";
mysqli_query($link, $sql); //執行刪除的SQL
//header("Location: booklist.php"); //回到書籍基本資料列表網頁
?>
<script type="text/javascript">
  alert("新增書籍成功，將返回到[書籍資料列表]");
  window.location.href = "booklist.php"; //返回到書籍資料列表網頁
</script>