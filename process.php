<?php
session_start();
include('apps.php');
error_reporting(0);
$mod = $_POST['irreducible'];
$konstanta = str_split($_POST['konstanta']);
$affine_table_raw = explode(',', $_POST['affine']);
for($af = 0; $af < count($affine_table_raw); $af++){
    $affineTable[$af] = array_map('intval',str_split(trim($affine_table_raw[$af]))); 
}

// var_dump($affineTable);die;
$tableData = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f'];

for ($j = 0; $j < 16; $j++) {
    for ($r = 0; $r < 16; $r++) {
        $tableDataFull[] = "$tableData[$j]$tableData[$r]";
    }
}


for ($i = 0; $i < 256; $i++) {
    for ($j = 0; $j < 256; $j++) {
        if ($i == 0 && $j == 0) {
            $hasilInvers[][] = toDec('00000000');
            continue;
        }
        $array1 = toBinArray($tableDataFull[$i]);
        $array2 = toBinArray($tableDataFull[$j]);
        $hasil =  byteInversMultiply($array1, $array2);
        $xor = $hasil;
        $modulo = toGenerateMod($mod, $hasil);
        $newMod = $modulo;
        while (true) {
            $xor = xorFunction($xor, $newMod);
            $newMod = shiftRight($modulo, $xor);
            if (strlen($xor) <= 8) {
                if (toDec($xor) == 1) {
                    $hasilInvers[][] = $tableDataFull[$j];
                } else { }
                break;
            }
        }
    }
}

for ($ak = 0; $ak < 256; $ak++) {
    $toBin = toBinSbox($hasilInvers[$ak][0]);
    $affine = affine($toBin, array_map('intval',$konstanta), $affineTable);
    $result[][] = toHexSbox($affine);
}


// print_r($hasilInvers);
$_SESSION['invers'] = $hasilInvers;
$_SESSION['sbox'] = $result;
header('Location: result.php');
?>
