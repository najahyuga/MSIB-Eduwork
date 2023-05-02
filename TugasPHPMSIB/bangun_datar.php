<?php
class BangunDatar{ 
    public function persegiPanjang(int $p, $l)
    {
        $hasilPP = $p * $l;
        echo "Luas Persegi Panjang pxl = $p x $l : $hasilPP" . PHP_EOL;
    }

    public function persegi(int $s)
    {
        $hasilP = $s ** $s;
        echo "Luas Persegi sxs = $s : $hasilP" . PHP_EOL;
    }

    public function jajarGenjang(int $a, $t)
    {
        $hasilJG = $a * $t;
        echo "Luas Jajar Genjang axt = $a x $t : $hasilJG" . PHP_EOL;
    }

    public function layangLayang(int $d1, $d2)
    {
        $hasilL = 0.5 * $d1 * $d2;
        echo "Luas Layang Layang 0.5xd1xd2 = $d1 x $d2 : $hasilL" . PHP_EOL; 
    }
    public function belahKetupat(int $d1, $d2)
    {
        $hasilL = 0.5 * $d1 * $d2;
        echo "Luas Belah Ketupat 0.5xd1xd2 = $d1 x $d2 : $hasilL" . PHP_EOL; 
    }

}