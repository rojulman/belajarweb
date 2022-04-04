<?php 
require_once 'class_dosen.php';
require_once 'class_matakuliah.php';
require_once 'class_dosenmatakuliah.php';

$dsn1 = new Dosen("048601","Ahmad Rio");
$dsn1->gender="L";
$dsn1->tmp_lahir="Pekalongan";
$dsn1->tgl_lahir="1986-12-13";
$dsn1->pendidikan="S2";

$dsn2 = new Dosen("048602","Amalia Rahmah");
$dsn2->gender="P";
$dsn2->tmp_lahir="Yogyakarta";
$dsn2->tgl_lahir="1986-01-03";
$dsn2->pendidikan="S3";

$mk1 = new Matakuliah("Statistik",3,"STAT");
$mk2 = new Matakuliah("UI/UX",3,"UIUX");

$dmk1 = new DosenMatakuliah($dsn1,$mk1,"20211");
$dmk1->hari="Senin";
$dmk1->ruangan="B2301";
$dmk2 = new DosenMatakuliah($dsn2,$mk2,"20212");
$dmk2->hari="Kamis";
$dmk2->ruangan="A201";

$ar_jadwal = [$dmk1,$dmk2];

?>
<h1>Jadwal Kuliah Program Studi Sistem Informasi - STTNF</h1>
<table class="table" border="1" width="100%">
    <thead>
        <tr>
            <th>No</th><th>Semester</th><th>Matakuliah</th>
            <th>SKS</th><th>Dosen</th><th>Hari</th><th>Ruangan</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor=1;
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

