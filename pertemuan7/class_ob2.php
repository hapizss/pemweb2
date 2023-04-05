<?php
class buah 
{
    public $warna = "oren";
    public $nama = "jeruk";
    public $rasa = "kecut";

    function tumbuh()
    {
        return "$this->nama itu bisa tumbuh";
    }

    function busuk()
    {
        return "$this->nama itu bisa busuk";
    }
}
$objekbuah = new buah;
$objekbuah->nama = "semangka";
$objekbuah->warna = "merah";
$objekbuah->rasa = "manis";
echo $objekbuah->tumbuh();
echo "<br>";
echo $objekbuah->busuk();