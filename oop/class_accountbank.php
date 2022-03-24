<?php 
require_once 'class_account.php';

class AccountBank extends Account{
    public $customer;
    static $biaya_admin = 6500;

    function __construct($nomor,$saldo,$customer){
        parent::__construct($nomor,$saldo);
        $this->customer = $customer;
    }

    public function transfer($ab_tujuan,$uang){
        $ab_tujuan->deposit($uang);// account bank tujuan bertambah saldonya
        $this->witdrawl($uang);// saldo account bank ini berkurang
        $this->witdrawl(self::$biaya_admin);
    }

    public function cetak(){
        parent::cetak();// panggi function milik parent
        echo '<br/>Customer : '.$this->customer;
    }

    public function getSaldo(){
        return $this->saldo;
    }
}

