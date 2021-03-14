<?php 
require_once 'class_akun.php';

class BankAccount extends Account{
    public $customer;
    
    function __construct($nomor,$saldo,$customer){
        parent::__construct($nomor,$saldo);
        $this->customer=$customer;
    }

    // override method 
    function cetak(){
        parent::cetak();
        echo '<br/>Customer : '.$this->customer;
    }
 
    function transfer($obj_akun,$uang){
        $obj_akun->deposit($uang);// rekening tujuan bertambah
        $this->witdraw($uang);// rekening ini berkurang
    }

}