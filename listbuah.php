<?php 
$ar_jus = [
    ['buah'=>'jeruk','harga'=>7500],
    ['buah'=>'mangga','harga'=>8000],
    ['buah'=>'alpukat','harga'=>10000],
    ['buah'=>'durian','harga'=>14000],
  ];
  ?>
<table width="100%" border="1">
<thead>
   <tr bgcolor="magenta">
       <th>No</th><th>Buah</th><th>Harga</th>
   </tr>
</thead>
<tbody>
<?php 
  $nomor = 1;
  $total = 0;
  foreach($ar_jus as $jus){
  $warna = ($nomor%2 == 0)?"pink":"yellow";
  echo '<tr bgcolor="'.$warna.'"><td>'.$nomor.'</td><td>'.$jus['buah'].'</td><td align="right">'.
  number_format($jus['harga'],2,',','.').'</td></tr>';
  $nomor++;
  $total = $total + $jus['harga'];
  }
?>  
<tr>
 <td colspan="3" align="right"><?php echo number_format($total,2,',','.')?></td>
</tr>
</tbody>
</table>

