<?php
function forfactorial($Num)
{
  if ($Num >= 0) {
    if ($Num == 0) {
      return 1;
    } else {
      $resultfor = 1;
      for ($i = $Num; $i; $i--) {
        $resultfor *= $i;
      }
      return $resultfor;
    }
  }
}
function factorial($No)
{
  if ($No == 0) {
    return 1;
  } else {
    return $No * factorial($No - 1);
  }
}
$fnum = $_GET["factint"];
echo "<br>" . $fnum . " 的階層為:" . forfactorial($fnum);
echo "<hr>";
echo "<br>使用遞迴產生:" .$fnum. " 的階層為:". factorial($fnum);
