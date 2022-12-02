<?php
	include "incl1.php"; //引入incl1.php
	echo "5+3=".add(5, 3)."<br>";
	//使用require.php
	require "incl2.php"; //已加入
	echo "5-3=".minus(5, 3)."<br>";
?>