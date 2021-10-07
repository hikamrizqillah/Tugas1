<!DOCTYPE html>
<html lang="en">
<head>
    <title> <?php Biodata ?> </title>
</head>
<body>
<?php

$namadepan = "Hikam ";
$namatengah = "Rizqillah ";
$namabelakang = "Munandar ";
$namalengkap = $namadepan . $namatengah . $namabelakang;
echo "$namalengkap";

$nomorwa = "085290948574";
$usia = "19";

$kota = "Banyumas, ";
$hari = "3 ";
$bulan = "Juni ";
$tahun = "2002 ";
$ttl = $kota . $hari . $bulan . $tahun;

$jalan = "jl. KS Tubun Gg Riswan, ";
$kelurahan = "kel. Kober, ";
$kecamatan = "kec. Purwokerto Barat, ";
$kabupaten = "kab. Banyumas, ";
$kodepos = "53132";
$alamat = $jalan . $kelurahan . $kecamatan . $kabupaten . $kodepos;

$status = "sudah menikah";

$kabisat = var_dump($tahun % 4);

$ip1 = 38;
$ip2 = 40;
$ip3 = 38;
$ip4 = 40;
$ip5 = 38;
$ip6 = 40;
$ip7 = 38;
$ip8 = 40;
$ipk = $ip1 + $ip2 + $ip3 + $ip4 + $ip5 + $ip6 + $ip7 + $ip8;
$ipk = $ipk / 8 ;

?>
</body>
</html>