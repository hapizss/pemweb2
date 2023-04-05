<?php
class balok
{
    public $panjang, $lebar , $tinggi;
    
    public function hitungbalok()
    {
        return $this->panjang * $this->lebar * $this->tinggi; 
    }

}
$objekbalok = new balok;
$objekbalok->panjang = 6;
$objekbalok->lebar = 5;
$objekbalok->tinggi = 9;
echo round($objekbalok->hitungbalok());
echo "cm";

echo "<br>";

class bola
{
    public function hitungvolume()
    {
        return 4/3 * 3.14 * pow(15, 3);
    }
}
$objekbola = new bola;
echo "volume bola =";
echo round($objekbola->hitungvolume());