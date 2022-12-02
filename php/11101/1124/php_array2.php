<?php
//建立個人資料陣列，不使用一般索引
//$myArray -> 個人資料陣列
$myArray['myName'] = 'David'; //索引:myName
$myArray['myHeight'] = 181; //索引:myHeight
$myArray['myWeight'] = 78; //索引:myWeight
$myArray['BMI'] = round($myArray['myWeight'] / (($myArray['myHeight'] / 100) * ($myArray['myHeight'] / 100)), 2);
//個人陣列資料顯示
echo "在myArray陣列中，姓名:" . $myArray['myName'] . ".<br>";
echo "在myArray陣列中，身高:" . $myArray['myHeight'] . ".<br>";
echo "在myArray陣列中，體重:" . $myArray['myWeight'] . ".<br>";
echo "在myArray陣列中，BMI:" . $myArray['BMI'] . ".<br>";
