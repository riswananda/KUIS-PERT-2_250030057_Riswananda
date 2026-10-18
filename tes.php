<?php
echo "Kuis 1 Gung Nanda <br>";

    $Angka = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

     echo "Angka yang habis dibagi 3 adalah: <br>";

        for ($i = 0; $i < 20; $i++) {
            if ($Angka[$i] % 3 == 0) {
                echo $Angka[$i]."<br>";
            }
        }


echo "<hr>";

echo "Kuis 2 Gung Nanda <br>";
function hitungNilaiAkhir($tugas, $uts, $uas) {
    $nilaiAkhir = ($tugas * 30 / 100) + ($uts * 30 / 100) + ($uas * 40 / 100);

    if ($nilaiAkhir >= 70) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    echo "Nilai Akhir: " . $nilaiAkhir . "<br> <br>";

    echo "Status: " . $status;
}

hitungNilaiAkhir(80,85,90);