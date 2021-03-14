<?php 
class NilaiSiswa{
    public $nama;
    public $nilai;
    public $sekolah = 'SDIT NF';

    public function getHasil(){
        if($this->nilai > 55 ) return 'LULUS';
        else return 'TIDAK LULUS';
    }
}