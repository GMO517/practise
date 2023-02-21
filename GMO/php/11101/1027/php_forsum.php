<?php  
	echo "<center><h1>加總迴圈</h1></center><hr>";
	$endint = $_GET["oneint"];
	$sum = 0;
	for($i = 1; $i <= $endint; $i++){
		if($i == 1){
			$process = "1";
		}
		else{
			$process = $process ." + ". $i;
			if(($i%10) == 0) $process = $process . "</br>";
		}
		$sum += $i;
	}
	echo "<h3>從1加到".$endint."其總合為:</h3>";
	echo "<h3>加總過程:</br>".$process."=<br></h3>";
	echo "<font color = 'red'><h3><u>".$sum."</u></h3></font>";
	
?>