<?php
require_once("dbconnectbook.inc");
//刪除資料的SQL
$sql = "DELETE FROM mybooks ";
$sql .= "WHERE bookid=" . $_GET["bookid"];
//echo $sql."</BR>";
mysqli_query($link, $sql); //執行刪除的SQL
header("Location: booklist.php");//回到書籍基本資料列表網頁
