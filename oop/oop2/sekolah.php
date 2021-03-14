<?php 
require_once 'class_nilaisiswa.php';

$ns1 = new NilaiSiswa('Faiz Fikri',80);
$ns2 = new NilaiSiswa('Rosalie Naurah',90);
$ns3 = new NilaiSiswa('Badu',40);
$ns4 = new NilaiSiswa('Rio Dumatubun',65);
$ar_siswa = [$ns1,$ns2,$ns3,$ns4];
?>
<table border="1" width="100%">
<thead>
<tr>
<th>No</th><th>Nama</th><th>Nilai</th><th>Hasil</th>
</tr>
</thead>
<tbody>
<?php 
  $nomor = 1;
  foreach($ar_siswa as $sis){
    echo '<tr><td>'.$nomor.'</td><td>'.$sis->nama.'</td>';
    echo '<td>'.$sis->nilai.'</td><td>'.$sis->getHasil().'</td></tr>';
    $nomor++;
  }
?>
</tbody>
</table>
</table>