<?php 
require_once 'class_mahasiswa.php';
require_once 'class_dosen.php';
require_once 'class_matakuliah.php';
require_once 'class_dosenmatakuliah.php';

$mhs1  = new Mahasiswa("020001","Dewi Sruni");
$mhs1->ipk = 3.82;
$mhs1->gender ="P";
$mhs1->tmp_lahir="Depok";
$mhs1->tgl_lahir="2000-01-15";

$dsn1 = new Dosen("048601","Ahmad Rio");
$dsn1->pendidikan="S2";
$dsn1->gender ="L";
$dsn1->tmp_lahir="Depok";
$dsn1->tgl_lahir="2000-01-15";

$dsn2 = new Dosen("047801","Sirojul Munir");
$dsn2->pendidikan="S2";
$dsn2->gender ="L";
$dsn2->tmp_lahir="Jakarta";
$dsn2->tgl_lahir="1978-04-20";


echo 'Nama Mahasiswa: '.$mhs1->nama;
echo '<br/>IPK : '.$mhs1->ipk;
echo '<br/>Predikat '.$mhs1->predikat();

echo '<hr/>';
echo 'Nama Dosen : '.$dsn1->nama;
echo '<br>Pendidikan Akhir '.$dsn1->pendidikan;

$mk1 = new Matakuliah("Statistik",3,"STAT1");
$mk2 = new Matakuliah("Pemrograman Web 2",3,"WEB02");

$dmk1 = new DosenMatakuliah($dsn1,$mk1,20211);
$dmk1->hari="Senin";
$dmk1->ruangan="A301";
$dmk2 = new DosenMatakuliah($dsn2,$mk2,20212);
$dmk2->hari="Kamis";
$dmk2->ruangan="B2301";

$ar_jadwal = [$dmk1,$dmk2];
?>
<table class="table" border="1" width="100%">
    <thead>
        <tr>
            <th>No</th><th>Semester</th><th>Matakuliah</th>
            <th>SKS</th><th>Dosen</th><th>Hari</th><th>Ruangan</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $nomor =1;
        foreach($ar_jadwal as $obj){
    ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$obj->semester?></td>
            <td><?=$obj->matakuliah->nama?></td>
            <td><?=$obj->matakuliah->sks?></td>
            <td><?=$obj->dosen->nama?></td>
            <td><?=$obj->hari?></td>
            <td><?=$obj->ruangan?></td>
        </tr>
    <?php  
    $nomor++;      
        }
    ?>
    </tbody>
</table>


