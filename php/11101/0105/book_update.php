<?php
require_once("dbconnectbook.inc");
//更新資料的SQL
$sql = "UPDATE mybooks SET ";
$sql .= "bookname='" . $_POST["bookname"] . "',"; //書籍名稱
$sql .= "author='" . $_POST["author"] . "',"; //書籍作者
$sql .= "price='" . $_POST["price"] . "' "; //書籍價格 注意最後空白
$sql .= " WHERE bookid =" . $_POST["bookid"]; //修改條件:bookid
//echo $sql . "</BR>";
mysqli_query($link, $sql); //執行刪除的SQL
//header("Location: booklist.php"); //回到書籍基本資料列表網頁
?>
<script type="text/javascript">
  alert("修改書籍成功，將返回到[書籍資料列表]");
  window.location.href = "booklist.php"; //返回到書籍資料列表網頁
</script>