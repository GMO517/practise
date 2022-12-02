<?php
function local()
{
  static $number = 0;
  $number += 2;
  echo "函數中...靜態變數:\$number = " . $number;
  echo "<br>";
}
local();
echo "<hr>第2次:";
local();
echo "<br>";
echo "函式外...靜態變數:\$number = " . $number;
echo "<hr>第3次:";
local();
