<?php 
	echo "<center><h1>巢狀迴圈for_直角三角形</h1></center>";
	$level = $_GET["level"];
	$process = "";
	for ($i = 1; $i <= $level; $i++){
		for ($j = 1; $j <= $i; $j++){
			$process = $process . "*";
		}
		$process = $process . "<br>";
	}
	echo "<h3>顯示".$level."層的直角三角形</h3>";
	echo $process;
	echo "<hr>";
 ?>