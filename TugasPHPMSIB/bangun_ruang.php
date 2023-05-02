<?php
class bangunRuang{

    public function balok(int $p, $l, $t)
    {
        $hasilL = $p * $l * $t;
        echo "Volume Bangun Ruang Balok = $hasilL" . PHP_EOL;
    }

    public function kubus(int $s)
    {
        $hasilL = $s * $s * $s;
        echo "Volume Bangun Ruang Kubus = $hasilL" . PHP_EOL;
    }

    public function prisma(int $la, $t)
    {
        $hasilL = $la * $t;
        echo "Volume Bangun Ruang Prisma = $hasilL" . PHP_EOL;
    }
}