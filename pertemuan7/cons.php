<?php
class persegi 
{
    public $sisi;

    function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    function hitungluas()
    {
        return $this->sisi * $this->sisi;
    }
}
$objek = new persegi(7);
echo $objek->hitungluas();