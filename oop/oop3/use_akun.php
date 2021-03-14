<?php 
require_once 'class_akun.php';

$ac1 = new Account('AC001',5000);
echo 'sebelum menabung:<br>';
$ac1->cetak();
$ac1->deposit(200);
echo '<br/>setelah menabung 200<br>';
$ac1->cetak();

$ac2 = new Account('AC300',300);

?>