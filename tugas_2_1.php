<?php
echo "Tugas 2_1 php";
echo "<br>";
$waktu = 36;
$pekerja = 12;
$pekerja_2 = 24;

$jum_hari = (($pekerja / $pekerja_2 ) * ($waktu));

print_r($waktu . " Hari = " . $pekerja . " Pekerja ");
echo "<br>";
print_r("X Hari = " . $pekerja_2 . " Pekerja ");
echo "<br>";
print_r("X  = $jum_hari ");
echo "<br>";
print_r("Jawaban :". $jum_hari . " jumlah hari yang dibutuhkan");



?>