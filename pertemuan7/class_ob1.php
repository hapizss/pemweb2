<?php
class mamalia
{
    public $namahewan;
    public $warna;
    public $habitat;
    public $makanan;

    function menyusui()
    {
        return "$this->namahewan adalah hewan menyusui";
    }

    function beranak()
    {
        return "$this->namahewan adalah hewan melahirkan";
    }

    function makan()
    {
        return "$this->namahewan suka makan $this->makanan";
    }
}

$objek = new mamalia();
$objek ->namahewan = "kucing";
$objek ->warnahewan = "coklat";
$objek ->habitat = "sekitar manusia";
$objek ->makanan = "wiskas";
echo $objek->menyusui();