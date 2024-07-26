<?php

class Animal {
    public $jumlah_kaki;
    public $bisa_terbang = "Tidak bisa terbang";

    public function bersuara() {
        return "Tidak ada suara";
    }
}

class Kucing extends Animal {
    public function bersuara() {
        return "Meong";
    }
}

class Anjing extends Animal {
    public function bersuara() {
        return "Guk Guk";
    }
}

class Elang extends Animal {
    public $bisa_terbang = "Bisa terbang";

    public function bersuara() {
        return "Miiip";
    }
}

?>
