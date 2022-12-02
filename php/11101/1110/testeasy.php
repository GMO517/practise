<?php
$s = 0;
$c = 0;
$numarray = $_GET["num"];
for ($i = 0; $i < 5; $i++) {
  if ($numarray[$i] % 2 == 0) {
    $s += $numarray[$i];
    $c += 1;
  }
}

echo "<hr>可以被2整除的數字共有" . $c . "個<hr>";
echo "數字總和:" . $s . "<hr>";
echo "...計算完成";
