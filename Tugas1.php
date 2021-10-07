<?php

$namadepan = "Hikam ";
$namatengah = "Rizqillah ";
$namabelakang = "Munandar ";
$namalengkap = $namadepan . $namatengah . $namabelakang;

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

$kabisat = $tahun % 4;

$status = "sudah menikah";

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

<!DOCTYPE html>
<html lang="en">
<head>
    <title> <?= "Biodata" ?> </title>
</head>
<body>
    <div>
        <p>Nama lengkap            : <?php echo "$namalengkap" ?></p><br>
        <p>Nomor WA                : <?= "$nomorwa" ?></p><br>
        <p>Usia                    : <?= "$usia" ?></p><br>
        <p>Tempat, tanggal lahir   : <?= "$ttl" ?></p><br>
        <p>Alamat                  : <?= "$alamat" ?></p><br>
        <p>Sudah menikah?          : <?php var_dump(false); ?></p><br>
        <p>Tahun lahir kabisat?    : <?= var_dump($kabisat == 0) ?></p>
    </div>
</body>
</html>