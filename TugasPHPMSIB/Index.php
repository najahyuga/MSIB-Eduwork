<?php

require_once "bangun_datar.php";
require_once "bangun_ruang.php";

$bd = new BangunDatar();
$bd->persegiPanjang(5,5);

$bd->persegi(2);

$bd->jajarGenjang(4,5);

$bd->layangLayang(1, 2);

$bd->belahKetupat(3,2);

$br = new bangunRuang();
$br->balok(3,2,5);

$br->kubus(3);

$br->prisma(5,2);