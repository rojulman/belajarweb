<?php 
class Mahasiswa{
    // member class variable
    public $nim;
    public $nama;
    public $ipk;
    public $prodi;

    function __construct($nim,$nama){
        $this->nim = $nim;
        $this->nama = $nama;
    }

    // member class function
    public function predikat(){
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
    public function cetak(){
        echo 'Nama : '.$mhs1->nama;
        echo '<br/>NIM : '.$mhs1->nim;
        echo '<br/>Predikat Kelulusan : '.$this->predikat();
    }
}