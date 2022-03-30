<?php 
class Matakuliah{
    public $nama;
    public $sks;
    public $kode;

    function __construct($nama,$sks,$kode){
        $this->nama = $nama;
        $this->sks = $sks;
        $this->kode = $kode;
    }

    public function cetak(){
        echo 'Nama Matakuliah : '.$this->nama;
        echo '<br/>SKS : '.$this->sks;
        echo '<br/>Kode : '.$this->kode;
    }
}