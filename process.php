<?php
session_start();
$timestart = getrusage();
require_once('func.php');

$hexa = $_POST['hex'];

$toBin = toBin($hexa);
$affine = affine($toBin);
$result = toHex($affine);

$_SESSION['result'] = $result;
$_SESSION['time'] = (int) $timestart["ru_utime.tv_usec"] / 1000000;

header('location: result.php');
