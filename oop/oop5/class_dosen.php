<?php 
require_once 'class_person.php';

class Dosen extends Person{
    public $nidn;
    public $pendidikan;

    function __construct($nidn,$nama){
        $this->nidn = $nidn;
        $this->nama = $nama;
    }
}