<?php
//建立四位學生資料陣列，不使用一般索引
$students = array(
  array('學號' => '101', '姓名' => 'Robert', '性別' => '男', '身高' => 190, '體重' => 100),
  array('學號' => '102', '姓名' => 'Rose', '性別' => '女', '身高' => 165, '體重' => 50),
  array('學號' => '103', '姓名' => 'Bob', '性別' => '男', '身高' => 150, '體重' => 70),
  array('學號' => '104', '姓名' => 'Mary', '性別' => '女', '身高' => 150, '體重' => 40)
);
$sid = $_GET['sid'];
//將個人陣列資料顯示
echo "在第" . ($sid + 1) . "位學生資料中，學號:" . $students[$sid]['學號'] . ".<br>";
echo "在第" . ($sid + 1) . "位學生資料中，姓名:" . $students[$sid]['姓名'] . ".<br>";
echo "在第" . ($sid + 1) . "位學生資料中，性別:" . $students[$sid]['性別'] . ".<br>";
echo "在第" . ($sid + 1) . "位學生資料中，身高:" . $students[$sid]['身高'] . ".<br>";
echo "在第" . ($sid + 1) . "位學生資料中，體重:" . $students[$sid]['體重'] . ".<br>";

$bmi = $students[$sid]['體重'] / (($students[$sid]['身高'] / 100) * ($students[$sid]['身高'] / 100));
echo "在第" . ($sid + 1) . "位學生資料中，上述個人BMI值:" . round($bmi, 2) . ".<br>";