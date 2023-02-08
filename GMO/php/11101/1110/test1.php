<?php
$s = 0;
$c = 0;
$numarray = $_GET["num"];
echo "五個資料分別為:";
for ($i = 0; $i < 5; $i++) {
  if ($i < 4) {
    echo $numarray[$i] . ",";
  } else {
    echo $numarray[$i];
  }
}

echo "<hr>";
for ($i = 0; $i < 5; $i++) {
  if ($numarray[$i] % 2 == 0) {
    echo "資料:" . $i + 1 . " " . $numarray[$i] . " 可以被2整除<br>";
    $s += $numarray[$i];
    $c += 1;
  } else {
    echo "資料:" . $i + 1 . " " . $numarray[$i] . "不可以被2整除<br>";
  }
}

echo "<hr>可以被2整除的數字共有" . $c . "個<hr>";
echo $c . " 個數字總和:" . $s . "<hr>";
echo "...計算完成";
