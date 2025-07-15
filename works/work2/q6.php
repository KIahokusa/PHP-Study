<?php

// 以下の配列をの要素のうち文字数が偶数のもののみ表示するループを書いてください
$fruits = array("Apple", "Banana", "Cherry");

for ($i = 0; $i < strlen($fruits); $i++) {
    if ($i % 2 = 1) {
        echo $fruits;
    }
}
