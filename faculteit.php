<?php

echo "Van welk getal wil je de faculteit weten?" .PHP_EOL;
$x = readline("");
$ans = 1;

for($i = 1; $i <= $x; $i++){
    $ans = $i * $ans;
}
echo "De faculteit van " . $x . " is " . $ans;