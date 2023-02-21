<?php
	//建立MySQL資料庫的連接
	$link = mysqli_connect('localhost:3306', 'root', '', 'school')
		or die("無法開啟MySQL資料庫連結!!</BR>"); //開啟MySQL主機連結
	echo "資料庫: school 開啟成功!!!</BR>";
	//設定SQL查詢字串
	$sql = "SELECT * FROM students"; //查詢所有學生資料的SQL 米字代表所有欄位
	echo "SQL查詢字串: $sql </BR>";
	//送出MySQL的編碼指令
	mysqli_query($link, "SET CHARACTER SET utf8");
	mysqli_query($link, "SET collation_connection = 'utf8_general_ci'");
  ?>