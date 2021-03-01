<?php 
$ar_profesi = [1=>"Mahasiswa","Guru","Dosen","ASN","Umum"];
// menangkap data kiriman form
$_nama = $_POST['fullname'];
$_email = $_POST['email'];
$_nohp =$_POST['mobilehp'];
$_profesi = $_POST['profesi'];
$_komentar = $_POST['komentar'];
// data diproses
$status = FALSE;//sukses
if($status){
    // arahkan ke halaman welcome
    header('location:welcome.php');
}else{
    header('location:form2.php?status=gagal');
}
?>
<?php 
/*
<h3>Data Registrasi</h3>
<?php 
  echo 'Nama Lengkap :' . $_nama;
?>
<br/>Email : <?=$_email?>
<br/>No.HP : <?=$_nohp?>
<br/>Profesi : <?php echo $ar_profesi[$_profesi]?>
<br/>Komentar : <?=$_komentar?>
*/?>