<?php
	$dir = $_REQUEST['submit'];
	$ans = "要往的方向:";	
	switch ($dir) {
		case '上':
			$ans = $ans . "往北";
			break;
		case '下':
			$ans = $ans . "往南";
			break;
		case '左':
			$ans = $ans . "往西";
			break;
		case '右':
			$ans = $ans . "往東";
			break;
		
		default:
			$ans = $ans . "無方向";
			break;
	}
	echo "<font color='red'><h3><u>".$ans."</u></h3></font>";
?>