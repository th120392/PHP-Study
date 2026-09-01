<?php

// Userクラスの読み込み
require 'Gun.php';

$mainWeapon = new Gun("AK47", 29);
$subWeapon = new Gun("Mosin-Nagant",5);

// 現在の状態を表示
$mainWeapon->echoStatus();
$subWeapon->echoStatus();


$mainWeapon->reload();
$mainWeapon->fire();
$mainWeapon->echoStatus();
$mainWeapon->setextendedMagazine(10);
