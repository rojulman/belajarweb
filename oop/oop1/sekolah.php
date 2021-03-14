<?php 
require_once 'class_nilaisiswa.php';

$ns1 = new NilaiSiswa();
$ns1->nama='Faiz Fikri';
$ns1->nilai = 80;
echo $ns1->nama .' Sekolah di '.$ns1->sekolah;
echo '<br/>Hasil ujian : '.$ns1->nilai
     .' dinyatakan '.$ns1->getHasil();
?>