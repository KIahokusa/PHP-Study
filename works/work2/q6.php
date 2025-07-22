<?php

// 以下の配列をの要素のうち文字数が偶数のもののみ表示するループを書いてください
$fruits = array("Apple", "Banana", "Cherry");

for ($i = 0; $i < count($fruits); $i++) {
    $item = $fruits[$i];
    if (strlen($item) % 2 == 0) {
        echo $item;
    }
}
