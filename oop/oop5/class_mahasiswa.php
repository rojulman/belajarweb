<?php 
require_once 'class_person.php';
class Mahasiswa extends Person{
    public $nim;
    public $ipk;

    function __construct($nama,$nim){
        $this->nama = $nama;
        $this->nim = $nim;
    }

    public function predikat(){
        $predikat = ($this->ipk >= 3.75) ? "Cum laude" : "Baik";
        return $predikat;
    }
}