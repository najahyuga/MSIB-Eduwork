<?php
function input(string $info): string{
    
    echo "$info : ";
    $result = fgets(STDIN);
    return trim($result);
}

$nama = input("Masukkan Nama");
$tb = input("Masukkan Tinggi Badan");
$bb = input("Masukkan Berat Badan");

$tinggi = $tb / 100;
$hasil = $bb / ($tinggi * $tinggi);

if ($hasil < 17) {
    echo "Halo, $nama. Nilai BMI Anda Adalah $hasil, Anda Termasuk Kurus";
} elseif ($hasil <= 23) {
    echo "Halo, $nama. Nilai BMI Anda Adalah $hasil, Anda Termasuk Normal";
} elseif ($hasil <= 27) {
    echo "Halo, $nama. Nilai BMI Anda Adalah $hasil, Anda Termasuk Gemuk";
} else {
    echo "Halo, $nama. Nilai BMI Anda Adalah $hasil, Anda Termasuk Obesitas";
}
