<?php
	$score = 0;
	$score = $_GET["score"];
	$grade = "輸入錯誤"
	echo "<h3>您所輸入的百分比成績".$score."</h3>";
	if(($score <= 100) and ($score >= 90)){
		$grade = "優等";
	} elseif ($score >= 80) {
		$grade = "甲等";
	} elseif ($score >= 70) {
		$grade = "乙等";
	} elseif ($score >= 60) {
		$grade = "丙等";
	} else{
		$grade = "不及格";
	}
	echo "<h3>為".$grade."</h3>";
?>