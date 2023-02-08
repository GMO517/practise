<?php
	$oneint = 0;
	$oneint = $_GET["oneint"];
	echo "<h3>您所輸入的整數:".$oneint."</h3>"
	if(($oneint)%2) == 0{
		echo "<h3>是偶數</h3>";
	}else{
		echo "<h3>是奇數</h3>";
	}
?>