<?php 
require_once 'class_bankAkun.php';

$ab1 = new BankAccount('AC2001',5000,'Rashford');
$ab2 = new BankAccount('AC3010',200,'Amad');

echo 'sebelum transfer<br/>';
$ab1->cetak();
echo '<br/>';
$ab2->cetak();
// rashford transfer ke amad 1200
$ab1->transfer($ab2,1200);
echo '<hr/>sesudah transfer<br/>';
$ab1->cetak();
echo '<br/>';
$ab2->cetak();
?>