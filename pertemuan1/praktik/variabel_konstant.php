<?php
// definisikan konstanta 
define ('PHI', 3.14);
define('DBNAME', 'investori');
define('DBSERVER','localhost');

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = PHI * $luas * $jari / 2;

// koneksi ke database
