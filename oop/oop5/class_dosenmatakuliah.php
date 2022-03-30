<?php 
require_once 'class_dosen.php';
require_once 'class_matakuliah.php';

class DosenMatakuliah{
    public $semester;
    public $dosen;
    public $matakuliah;
    public $hari;
    public $ruangan;

    function __construct($dosen,$matakuliah){
        $this->dosen = $dosen;
        $this->matakuliah = $matakuliah;
    }

}