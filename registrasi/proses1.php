<?php 
$ar_pekerjan = [1=>"Mahasiswa","Dosen","Guru","ASN","Umum"];
 // menangkap data dari form
 $_nama = $_GET['nama'];
 $_email = $_GET['email'];
 $_pekerjaan = $_GET['pekerjaan'];
 $_komentar = $_GET['komentar'];
 $_nohp = $_GET['nohp'];
// logika bisnis
$status = FALSE;//sukses
if($status){
    //die('status ' . $status);
    header('location:welcome.php');
}else{
  header('location:form1.php?status=gagal');
}
?>
<?php
/*
<h3>Data Registrasi Peserta</h3>
<?php 
  echo 'Nama Peserta : '.$_nama;
?>
  <br/>Email : <?=$_email?>
  <br/>Pekerjaan : <?=$ar_pekerjan[$_pekerjaan]?>
  <br/>NoHP : <?=$_nohp?>
  <br/>Komentar:<?=$_komentar?>
*/
?>