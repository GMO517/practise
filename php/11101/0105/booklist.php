<!DOCTYPE html>
<?php
require_once("dbconnectbook.inc");
$sql = "SELECT * FROM mybooks"; //列表所有書籍資料sql
$result = mysqli_query($link, $sql); //執行SQL
$total_records = mysqli_num_rows($result); //資料總筆數
?>
<html>

<head>
	<title>資料庫CRUD管理系統_書籍基本資料列表</title>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
</head>

<body>
	<center>
		<h1>資料庫CRUD管理系統_書籍基本資料列表</h1>
	</center>
	<hr>
	<center>
		<h3><?php echo "書籍資料總筆數: $total_records 筆"; ?></h3>
	</center>
	<table width="80%" align="center" border="0">
		<tr>
			<td align="center">
				<h2><strong>書籍基本資料列表</strong></h2>
			</td>
			<td align="right"><a href="bookaddnew.php?">新增書籍資料</a></td>
		</tr>
		<tr>
			<td colspan="2" align="center" valign="middle">
				<table width="100%" border="2" cellspacing="0">
					<tr>
						<td align="center" valign="center" width="10%">書籍編號</td>
						<td align="center" valign="center" width="30%">書籍名稱</td>
						<td align="center" valign="center" width="30%">作者</td>
						<td align="center" valign="center" width="20%">價格</td>
						<td align="center" valign="center" width="10%" colspan="2">操作</td>
					</tr>
					<?php
					$j = 1;
					while ($row = mysqli_fetch_assoc($result) and $j <= $total_records) {
						echo "<tr>";
						echo "<td align='center'>" . $row["bookid"] . "</td>";
						echo "<td align='center'>" . $row["bookname"] . "</td>";
						echo "<td align='center'>" . $row["author"] . "</td>";
						echo "<td align='center'>" . $row["price"] . "</td>";
						echo "<td align='center'><a href ='bookedit.php?bookid=" . $row["bookid"] . "'>修改</a></td>";
						echo "<td align='center'><a href ='bookdel.php?bookid=" . $row["bookid"] . "'>刪除</a></td>";
						echo "</tr>";
					}
					?>
				</table>
		</tr>
	</table>
</body>

</html>