<?php
/**
 * $i melakukan perulangan sebanyak 8x, dilakukan pengecekan dari 1 
 * $b pengcekan terlebih dahulu pada kondisi $b <= $i, apabila kondisi sesuai maka $b ditampikan
 */
for ($i = 1; $i <= 8; $i++) { 
    for ($b = 0; $b <= $i ; $b++) { 
        echo $b;
    }
    echo PHP_EOL;
}