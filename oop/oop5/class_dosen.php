<?php 
 require_once 'class_person.php';

 class Dosen extends Person{
     public $nidn;
     public $pendidikan;

     function __construct($nama,$nidn){
         $this->nama = $nama;
         $this->nidn = $nidn;
     }
 }