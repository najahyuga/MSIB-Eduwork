<?php
/**
 * $i melakukan perulangan sebanyak 10x, dilakukan pengecekan dari 10 
 * $b untuk menampilkan bintang* yang dimana akan dicek terlebih dahulu pada kondisi $b <= $i
 */
for ($i = 10; $i > 0; $i--) { 
    for ($b = 1; $b <= $i ; $b++) { 
        echo "*";
    }
    echo PHP_EOL;
}