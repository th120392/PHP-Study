<?php
// 1から100までの数字を表示するコードを２重ループを用いて書いてください
// ただし10ごとに改行されること

for ($row = 0; $row < 10; $row++) {
    for ($col = 1; $col <= 10; $col++) {
       $number = ($row * 10) + $col;
       echo $number . "\n";
    }
    echo "\n";
}