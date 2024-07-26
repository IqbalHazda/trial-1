<?php

class Handphone {
    public $merk, $tipe, $display, $warna, $harga, $processor;

    function Processor(){
        return "Processor dari hp ini adalah " .$this->processor;
    }

}

class Vivo extends Handphone{

}

class Iphone extends Handphone{
    function SmoothCamera(){
        echo "Kamera Jernih";
    }
}


$hp = new Handphone;
$hp->merk = "Vivo";
$hp->tipe = "V2020SE";
$hp->display = "20:9";
$hp->processor = "Snapdragon 1000";
$hp->warna = "Hitam";
$hp->harga = "Rp.2.000.000,00";

$iphone = new Iphone;
$iphone->merk = "iphone";
$iphone->tipe = "iphone 15 Promaghh";
$iphone->display = "2556 x 1179";
$iphone->processor = "A16 Bionic";
$iphone->warna = "Gold";
$iphone->harga = "Rp.15.000.000,00";

echo $iphone->Processor();


