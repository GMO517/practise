<!DOCTYPE html>
<?php
require_once("dbconnectbook.inc");
?>
<html>

<head>
	<title>資料庫CRUD管理系統_新增書籍基本資料</title>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
</head>

<body>
	<center>
		<h1>資料庫CRUD管理系統_新增書籍基本資料</h1>
	</center>
	<hr>
	<table width="80%" align="center" border="0">
		<tr>
			<td align="middle">
				<h2><strong>新增書籍基本資料</strong></h2>
			</td>
		</tr>
		<tr>
			<td align=center valign="middle">
				<form action="book_insert.php" method="POST" name="form1">
					<table width="100%" border="2" cellspacing="0">
						<tr>
							<td align="center" valign="center" width="20%">欄位</td>
							<td align="center" valign="center" width="80%">資料</td>
						</tr>
						<tr>
							<td align="center">書籍名稱:</td>
							<td align="left"><input type="text" name="bookname" value="" size="50" placeholder="請在此輸入新的書籍名稱"></td>
						</tr>
						<!-- placeholder=說明文字-->
						<tr>
							<td align="center">作者名稱:</td>
							<td align="left"><input type="text" name="author" value="" size="50" placeholder="請在此輸入此書籍的作者"></td>
						</tr>
						<tr>
							<td align="center">書籍價格:</td>
							<td align="left"><input type="text" name="price" value="" size="10" placeholder="請在此輸入此書籍的價格"></td>
						</tr>
						<tr>
							<td align="center" colspan="2"><input type="submit" name="submit" value="新增此書籍"></td>
						</tr>

		</tr>
	</table>
	</form>
	</tr>
	</table>
</body>

</html>