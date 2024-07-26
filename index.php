<?php

include "Animal.php";

$momo = new Kucing;
$momo->jumlah_kaki = 4;
echo "Momo adalah Kucing <br>";
echo "Punya Kaki Sebanyak: " .$momo->jumlah_kaki."<br>";
echo $momo->bisa_terbang."<br>";
echo "Suaranya: " .$momo->bersuara()."<br>";

echo "<hr>";

$doggo = new Anjing;
$doggo->jumlah_kaki = 4;
echo "Doggo adalah Anjing <br>";
echo "Punya Kaki Sebanyak: " .$doggo->jumlah_kaki."<br>";
echo $doggo->bisa_terbang."<br>";
echo "Suaranya: " .$doggo->bersuara()."<br>";

echo "<hr>";

$zya = new Elang;
$zya->jumlah_kaki = 2;
echo "Zya adalah Elang <br>";
echo "Punya Kaki Sebanyak: " .$zya->jumlah_kaki."<br>";
echo $zya->bisa_terbang."<br>";
echo "Suaranya: " .$zya->bersuara()."<br>";

echo "<hr>";

$masha = new Kucing;
$masha->jumlah_kaki = 2;
echo "Masha adalah Kucing <br>";
echo "Punya Kaki Sebanyak: " .$masha->jumlah_kaki."<br>";
echo $masha->bisa_terbang."<br>";
echo "Suaranya: " .$masha->bersuara()."<br>";

echo "<hr>";

?>
