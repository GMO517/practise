<?php
function addDouble($x, $y) //函數:兩數字相加
{
  echo "<hr>";
  echo "數字1:" . $x . "<br>";
  echo "數字2:" . $y . "<br>";
  echo "</hr><br>";
  echo "兩數相加" . ($x + $y);
}
echo "<center><h2>使用函式_兩次兩數相加</h2></center>";
$no1 = $_GET["no1"];
$no2 = $_GET["no2"];
$no3 = $_GET["no3"];
$no4 = $_GET["no4"];
addDouble($no1, $no2);
addDouble($no3, $no4);
echo "<br>...計算完成...";
