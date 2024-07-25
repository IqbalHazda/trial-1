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

echo "Tipe ".$hp->Processor();