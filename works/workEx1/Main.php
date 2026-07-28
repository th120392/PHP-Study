<?php

// Userクラスの読み込み
require 'Gun.php';

$mainWeapon = new Gun("AK47",29);

// 現在の状態を表示
$mainWeapon->echoStatus();

$mainWeapon->reload();
$mainWeapon->echoStatus();

$mainWeapon->fire();
$mainWeapon->fire();
$mainWeapon->fire();
$mainWeapon->fire();

$mainWeapon->setextendedmagazine(10);
$mainWeapon->reload();
$mainWeapon->echoStatus();

$mainWeapon->unsetextendednagazine();
$mainWeapon->echoStatus();