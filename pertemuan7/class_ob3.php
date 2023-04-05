<?php
class BMI
{
    public $beratbadan, $tinggibadan;
    
    public function hitungbmi()
    {
        return $this->beratbadan / ($this->tinggibadan ** 2); 
    }
    
    public function cekstatusberatbadan()
    {
        if($this->hitungbmi()<18.5){
            return "kekurangan berat badan";
        }elseif($this->hitungbmi()>= 18.5 || $this->hitungbmi()<= 24.9){
            return "normal";
        }elseif($this->hitungbmi()>= 25 || $this->hitungbmi()<= 29){
            return "kelebihan";
        }elseif($this->hitungbmi() >=30){
            return "obesitas";
        }
    }
}
$objekbmi = new BMI;
$objekbmi->beratbadan = 55;
$objekbmi->tinggibadan = 1.7;
echo round($objekbmi->hitungbmi());
echo "<br>";
echo $objekbmi->cekstatusberatbadan();