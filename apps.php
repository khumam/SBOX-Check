<?php

function byteInversMultiply($array1, $array2)
{
    $countArray1 = count($array1);                      // Array 1 yang akan dikalikan dengan array 2
    $countArray2 = count($array2);                      // Array 2 akan menjadi invers dari array satu jika nanti terbukti invers
    $totalCount = $countArray1 * $countArray2;          // Total hasil array yang akan dihasilkan
    $hasilArray = [];                                   // Hasil akan disimpan di variabel ini
    $finalArray = [];


    for ($i = 0; $i < $countArray1; $i++) {
        for ($j = 0; $j < $countArray2; $j++) {
            $hasilArray[] = $array1[$i] + $array2[$j];
        }
    }

    rsort($hasilArray);                                 // Value hasil array akan diurutkan dari yang terbesar menjadi yang terkecil
    $perValue = array_count_values($hasilArray);        //Kemudian akan dihitung banyaknya value yang sama pada array

    // Dibawah ini akan dihapus array (polynom) yang berjumlah genap

    foreach ($perValue as $key => $value) {
        if ($value % 2 == 0) {
            continue;
        } else {
            $finalArray[] = $key;
        }
    }

    // Ini adalah fungsi konversi array menjadi biner

    for ($k = 0; $k <= $finalArray[0]; $k++) {
        if (in_array($k, $finalArray)) {
            $finalBiner[] = 1;
        } else {
            $finalBiner[] = 0;
        }
    }

    $finalBiner = array_reverse($finalBiner);   //Array sudah berupa biner dengan reverse

    return implode($finalBiner);
    // return $finalBiner;
}

function toDec($stringInBin)
{
    return bindec($stringInBin);
}

function toBin($string)
{
    $value = unpack('A*', $string);
    return base_convert($value[1], 16, 2);
}

function toBinArray($string)
{
    $value = unpack('A*', $string);
    $bin = base_convert($value[1], 16, 2);
    $arrayBin = str_split($bin);
    $arrayBin = array_reverse($arrayBin);
    $count = strlen($bin);
    $result = [];
    for ($i = 0; $i < $count; $i++) {
        if ($arrayBin[$i] == 1) {
            $result[] = $i;
        } else {
            continue;
        }
    }
    $result = array_reverse($result);
    return $result;
}

function toGenerateMod($mod, $lengthArray)
{
    $length = strlen($lengthArray);
    for ($i = 9; $i < $length; $i++) {
        $mod .= 0;
    }
    return $mod;
}

function xorFunction($bin1, $bin2)
{
    $biner1 = bindec($bin1);
    $biner2 = bindec($bin2);
    return decbin($biner1 ^ $biner2);
}

function shiftRight($modulo, $xorResult)
{
    $shift = strlen($modulo) - strlen($xorResult);
    $newMod = bindec($modulo) >> $shift;
    return decbin($newMod);
}


function affine($hex, $const, $affineTable)
{

    // $affineTable = [
    //     [1, 0, 0, 0, 1, 1, 1, 1],
    //     [1, 1, 0, 0, 0, 1, 1, 1],
    //     [1, 1, 1, 0, 0, 0, 1, 1],
    //     [1, 1, 1, 1, 0, 0, 0, 1],
    //     [1, 1, 1, 1, 1, 0, 0, 0],
    //     [0, 1, 1, 1, 1, 1, 0, 0],
    //     [0, 0, 1, 1, 1, 1, 1, 0],
    //     [0, 0, 0, 1, 1, 1, 1, 1]
    // ];

    $hexArray = array_reverse(str_split($hex));
    $multipleResult = [0, 0, 0, 0, 0, 0, 0, 0];
    $finalResult = [0, 0, 0, 0, 0, 0, 0, 0];
    // $addition = [1, 1, 0, 0, 0, 1, 1, 0];
    $addition = $const;

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

function toBinSbox($hex)
{
    $hex = trim($hex);
    $bin = sprintf("%08d", decbin(hexdec($hex)));
    return $bin;
}

function toHexSbox($bin)
{
    $bin = trim($bin);
    $hex = dechex(bindec($bin));
    return $hex;
}
