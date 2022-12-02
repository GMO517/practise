<!DOCTYPE html>
<html>

<head>
	<title>資料庫處理_執行SQL_顯示所有欄位的資料</title>
</head>

<body>
	<center>
		<h1>資料庫處理_執行SQL_顯示所有欄位的資料</h1>
	</center>
	<hr>
	<?php
	require_once("school_open.inc");
	$result = mysqli_query($link, $sql); //執行SQL成功->$result
	echo "<center><h3>學生資料列表:</h3></center>";
	//將每一筆資料以表格方式一列顯示一筆資料呈現
	echo "<table border=1  cellspacing=0 align=center><tr>";
	//顯示每一欄的欄位，表頭，第一列
	while ($meta = mysqli_fetch_field($result))
		echo "<td>" . $meta->name . "</td>"; //顯示欄位名稱
	echo "</tr>";
	$total_fields = mysqli_num_fields($result); //欄位總數
	//顯示每一筆的資料
	while ($row = mysqli_fetch_row($result)) { //一次一筆資料
		echo "<tr>";
		for ($i = 0; $i < $total_fields; $i++) {
			echo "<td>" . $row[$i] . "</td>"; //顯示每一欄的資料
		}
		echo "</tr>";
	}
	echo "</table>";
	mysqli_free_result($result); //釋放$result的空間
	//關閉資料庫
	mysqli_close($link);
	?>
</body>

</html>