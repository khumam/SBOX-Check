<?php

function toBin($hex)
{
    $hex = trim($hex);
    $bin = sprintf("%08d", decbin(hexdec($hex)));
    return $bin;
}

function toHex($bin)
{
    $bin = trim($bin);
    $hex = dechex(bindec($bin));
    return $hex;
}

function affine($hex)
{

    $affineTable = [
        [1, 0, 0, 0, 1, 1, 1, 1],
        [1, 1, 0, 0, 0, 1, 1, 1],
        [1, 1, 1, 0, 0, 0, 1, 1],
        [1, 1, 1, 1, 0, 0, 0, 1],
        [1, 1, 1, 1, 1, 0, 0, 0],
        [0, 1, 1, 1, 1, 1, 0, 0],
        [0, 0, 1, 1, 1, 1, 1, 0],
        [0, 0, 0, 1, 1, 1, 1, 1]
    ];

    $hexArray = array_reverse(str_split($hex));
    $multipleResult = [0, 0, 0, 0, 0, 0, 0, 0];
    $finalResult = [0, 0, 0, 0, 0, 0, 0, 0];
    $addition = [1, 1, 0, 0, 0, 1, 1, 0];

    for ($i = 0; $i < 8; $i++) {
        for ($j = 0; $j < 8; $j++) {
            $multipleResult[$i] += $affineTable[$i][$j] * $hexArray[$j];
        }
    }
    for ($k = 0; $k < 8; $k++) {
        $finalResult[$k] = ($multipleResult[$k] + $addition[$k]) % 2;
    }
    return implode(array_reverse($finalResult));
}
