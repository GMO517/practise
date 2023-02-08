<?php
//建立個人資料陣列，不使用一般索引
//$myArray -> 個人資料陣列
//$myArray['myName'] = 'David'; //索引:myName
//$myArray['myHeight'] = 181; //索引:myHeight
//$myArray['myWeight'] = 78; //索引:myWeight
//$myArray['BMI'] = round($myArray['myWeight'] / (($myArray['myHeight'] / 100) * ($myArray['myHeight'] / 100)), 2);
$myArray = array('myName' => 'Robert', 'myHeight' => 190, 'myWeight' => 100);
//個人陣列資料顯示
echo "在myArray陣列中，姓名:" . $myArray['myName'] . ".<br>";
echo "在myArray陣列中，身高:" . $myArray['myHeight'] . ".<br>";
echo "在myArray陣列中，體重:" . $myArray['myWeight'] . ".<br>";
$bmi = $myArray['myWeight'] / (($myArray['myHeight'] / 100) * ($myArray['myHeight'] / 100));
echo "在個人資料中，上述個人BMI值:" . round($bmi, 2) . ".<br>";
