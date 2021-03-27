<?php 
require_once 'trait_salam.php';
class BMI {
   // member variabel
    public $bmi;
    public $berat;//kg
    public $tinggi;//cm
    public static $counter = 10;
    use Salam;

    function __construct($berat, $tinggi){
        $this->berat = $berat;// member nilai awal
        $this->tinggi = $tinggi;
        self::$counter++;// $counter = $counter + 1
    }

    public function getBMI(){
        $tinggi_meter = $this->tinggi/100;// jadikan meter
        $this->bmi = ($this->berat / pow($tinggi_meter,2));
        return $this->bmi;
    }

    public function status(){

        if($this->bmi < 18.5){
            return "Berat Badan Kurang";
        }elseif($this->bmi < 25){
            return "Berat Normal Ideal";
        }elseif($this->bmi < 30){
            return "Berat Badan Kelebihan";
        }else{
            return "Kegemukan (Obesitas)";
        }
    }

}

$bmi1 = new BMI(55.4, 170.4);
echo 'BMI 1 : '.$bmi1->getBMI();
echo '<br/>Status : '. $bmi1->status();
echo '<br/>Counter Pasien : '.BMI::$counter;
echo '<hr/>';
$bmi1->hello();

$bmi2 = new BMI(45.20, 159.2);
echo '<br/>BMI 2 : '.$bmi2->getBMI();
echo '<br/>Status : '. $bmi2->status();
echo '<br/>Counter Pasien : '.BMI::$counter;
