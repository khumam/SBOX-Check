<?php
include('newHope.php');
$mod = '100011011';
$tableData = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f'];
for ($k = 0; $k < 16; $k++) {
    for ($y = 0; $y < 16; $y++) {
        $data1[$k][$y] = "$tableData[$k]$tableData[$y]";
    }
}
print_r($data1[0][15]);
die;




$x = 0;
for ($k = 0; $k < 16; $k++) {
    $array1 = toBinArray($data1[$k][$x]);
    for ($y = 0; $y < 16; $y++) {
        $array2 = toBinArray($data[$k][$y]);
        // $mod = '100011011';
        $hasil =  byteInversMultiply($array1, $array2);
        $xor = $hasil;
        $modulo = toGenerateMod($mod, $hasil);
        $newMod = $modulo;
        while (true) {
            $xor = xorFunction($xor, $newMod);
            $newMod = shiftRight($modulo, $xor);
            if (strlen($xor) <= 8) {
                if (toDec($xor) == 1) {
                    echo "Inversnya!\n";
                } else {
                    echo $xor . "\n";
                }
                break;
            }
        }
    }
    $x++;
}
die;


$array1 = toBinArray('c2');
$array2 = toBinArray('3e');
// $mod = '100011011';
$hasil =  byteInversMultiply($array1, $array2);
$xor = $hasil;
$modulo = toGenerateMod($mod, $hasil);
$newMod = $modulo;
while (true) {
    $xor = xorFunction($xor, $newMod);
    $newMod = shiftRight($modulo, $xor);
    if (strlen($xor) <= 8) {
        if (toDec($xor) == 1) {
            echo "Inversnya!";
        } else {
            echo $xor;
        }
        break;
    }
}
die;
