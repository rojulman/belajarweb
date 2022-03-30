<?php 
require_once 'class_mahasiswa.php';
require_once 'class_dosen.php';
require_once 'class_matakuliah.php';
require_once 'class_dosenmatakuliah.php';

    $mhs1 = new Mahasiswa("dewi","020001");
    $mhs1->ipk = 3.5;
    $mhs1->gender = "P";
    $mhs1->tmp_lahir = "Depok";
    $mhs1->tgl_lahir = "2003-04-15";
    echo 'Nama Mahasiswa : '.$mhs1->nama ;
    echo '<br/>IPK : '.$mhs1->ipk;
    echo '<br/>Predikat : '.$mhs1->predikat();

    $dsn1 = new Dosen("ahmad rio","048601");
    $dsn1->pendidikan="S2";
    $dsn1->gender = "L";
    $dsn1->tmp_lahir = "Pemalang";
    $dsn1->tgl_lahir = "1986-08-22";
    echo '<hr/>';
    echo 'Nama Dosen : '.$dsn1->nama;
    echo '<br/>Pendidikan Akhir : '.$dsn1->pendidikan;
    echo '<br/>Tempat/Tgl Lahir : '.$dsn1->tmp_lahir .'/'.$dsn1->tgl_lahir;

    $mk1 = new Matakuliah("Statistik",3,"STAT");
    echo '<hr/>';
    $mk1->cetak();
    echo '<hr/>';
    $dmk1 = new DosenMatakuliah($dsn1,$mk1);
    $dmk1->semester="20211";
    $dmk1->hari="Senin";
    $dmk1->ruangan="B2301";

    $dsn2 = new Dosen("sirojul munir","047701");
    $mk2 = new Matakuliah("Pemrograman Web 2",3,"WEB2");
    $dmk2 = new DosenMatakuliah($dsn2,$mk2);
    $dmk2->semester="20212";
    $dmk2->hari="Rabu";
    $dmk2->ruangan="A301";

    $ar_dmk = [$dmk1, $dmk2];

?>
<table class="table" border="1" width="100%">
    <thead>
        <tr>
            <th>No</th><th>Mata Kuliah</th><th>SKS</th>
            <th>Semester</th>
            <th>Dosen</th><th>Hari</th><th>Ruangan</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $nomor=1;
            foreach($ar_dmk as $obj){
        ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$obj->matakuliah->nama?></td>
                <td><?=$obj->matakuliah->sks?></td>
                <td><?=$obj->semester?></td>
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