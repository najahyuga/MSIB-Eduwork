<?php

function input(string $info): string{
    
    echo "$info : ";
    $result = fgets(STDIN);
    return trim($result);
}

$nilai = input("Masukkan Nilai");

switch ($nilai) {
    case ($nilai >= 90 && $nilai <= 100):
        echo "Nilai anda A" . PHP_EOL;
        break;
    case ($nilai >= 80 && $nilai <= 90):
        echo "Nilai anda B" . PHP_EOL;
        break;
    case ($nilai >= 70 && $nilai <= 80):
        echo "Nilai anda C" . PHP_EOL;
        break;
    case ($nilai < 70):
        echo "Nilai anda D" . PHP_EOL;
        break;
    default:
        echo "Inputan Tidak Di Mengerti" . PHP_EOL;
        break;
}