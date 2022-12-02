<?php
//判斷所輸入的整數是偶數還是奇數
function addDouble($x, $y) //函數:兩數字相加
{
  echo "數字1:" . $x . "<br>";
  echo "數字2:" . $y . "<br>";
  echo "</hr><br>";
  echo "兩數相加" . ($x + $y);
}
echo "<center><h2>使用函式_兩數相加</h2></center>";
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
addDouble($num1, $num2);
echo "<br>...計算完成...";
