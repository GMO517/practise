<?php
global $s;
global $c;

function even($x)
{
  for ($i = 1; $i < 5; $i++) {
    if ($x % 2 == 0) {
      $s += $x;
      $c += 1;
    }
  }
}
$no1 = $_GET["n1"];
$no2 = $_GET["n2"];
$no3 = $_GET["n3"];
$no4 = $_GET["n4"];
$no5 = $_GET["n5"];


echo "...計算完成";
echo "可以被2整除的數字共有" . $ct . "個<br>";
echo "總和:" . $s . "<br>";
