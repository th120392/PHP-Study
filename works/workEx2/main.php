<?php
// 外部ファイルの読み込み
require "function.php";

// 生徒データ(点数は割り切れる値にしてあります)
$students = array(
    array("name" => "田中", "scores" => array(80, 70, 90)),
    array("name" => "佐藤", "scores" => array(55, 60, 50)),
    array("name" => "鈴木", "scores" => array(90, 85, 95)),
    array("name" => "高橋", "scores" => array(40, 50, 45)),
    array("name" => "伊藤", "scores" => array(70, 75, 65)),
);

// 全生徒の情報を表示
echo "=== 全生徒 ===\n";
displayStudents($students);

// 合格者のみ表示
echo "=== 合格者 ===\n";
$passed = getPassedStudents($students);
displayStudents($passed);