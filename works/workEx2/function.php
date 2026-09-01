<?php

// 関数1: 生徒の平均点を計算する
function calcAverage($scores)
{
    $total = 0;

    foreach ($scores as $score) {
        $total += $score;
    }

    return $total / count($scores);
}

// 関数2: 平均点から成績を返す
function getGrade($average)
{
    if ($average >= 90) {
        return "優";
    } elseif ($average >= 70) {
        return "良";
    } elseif ($average >= 50) {
        return "可";
    } else {
        return "不可";
    }
}

// 関数3: 合格者のみを返す
function getPassedStudents($students)
{
    $passedStudents = array();

    foreach ($students as $student) {
        $average = calcAverage($student["scores"]);

        if ($average >= 60) {
            $passedStudents[] = $student;
        }
    }

    return $passedStudents;
}

// 表示用関数
function displayStudents($students)
{
    foreach ($students as $student) {
        $avg = calcAverage($student["scores"]);
        $grade = getGrade($avg);

        echo "名前: " . $student["name"] . "\n";
        echo "平均点: " . $avg . "\n";
        echo "成績: " . $grade . "\n";
        echo "------------------\n";
    }
}


// 生徒データ
$students = array(
    array(
        "name" => "田中",
        "scores" => array(80, 80, 80)
    ),
    array(
        "name" => "佐藤",
        "scores" => array(55, 55, 55)
    ),
    array(
        "name" => "鈴木",
        "scores" => array(90, 90, 90)
    ),
    array(
        "name" => "高橋",
        "scores" => array(45, 45, 45)
    ),
    array(
        "name" => "伊藤",
        "scores" => array(70, 70, 70)
    )
);


// 全生徒を表示
echo "=== 全生徒 ===\n";
displayStudents($students);


// 合格者を表示
echo "=== 合格者 ===\n";
$passedStudents = getPassedStudents($students);
displayStudents($passedStudents);
