<?php

class Handphone {
    public $merk, $tipe, $display, $warna, $harga, $processor;

    public function Processor(){
        return "Processor dari hp ini adalah " .$this->processor;
    }

    function hidupkanHp(){
        return "menekan tombol power yang ada di hp";
    }

}

class Vivo extends Handphone{

}

class Iphone extends Handphone{
    function SmoothCamera(){
        echo "Kamera Jernih";
    }
    function hidupkanHp(){
        return "menekan tombol fingerPrint yang ada di hp";
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

echo "Hp : ".$hp->hidupkanHp();
echo "<br>";
echo "<br>";
echo "Iphone : ".$iphone->hidupkanHp();

