<?php

class Handphone {
    public $merk, $tipe, $display, $warna, $harga, $processor;

    function Processor(){
        return "Processor dari hp ini adalah " .$this->processor;
    }

}

$hp = new Handphone;
$hp->merk = "Vivo";
$hp->tipe = "V2020SE";
$hp->display = "20:9";
$hp->processor = "Snapdragon 1000";
$hp->warna = "Hitam";
$hp->harga = "Rp.2.000.000,00";

$hp2 = new Handphone;
$hp2->merk = "Vivo";
$hp2->tipe = "V2020SE";
$hp2->display = "20:9";
$hp2->processor = "Snapdragon 1000";
$hp2->warna = "Hitam";
$hp2->harga = "Rp.2.000.000,00";

echo "$hp2->tipe";
echo "<br>";
echo "$hp->tipe";

if($hp === $hp2){
    echo "sama";
}
else{
    echo "tidak";
}