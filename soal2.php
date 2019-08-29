<?php

$Nilaiindo = 80;
$Nilaimtk  = 70;
$Nilairata = 75;
$a = keterangan;
$b = grade;
echo "Nilai B.Indonesia:$Nilaiindo<br>";
echo "Nilai Matematika :$Nilaimtk<br>";
echo " Nilai Rata rata :$Nilairata<br>";
$nilai = 100; 
if ($nilai >= 60) {     
    echo "$a LULUS <br> $b B <br>";
}
echo "grade A, Nilai rata-rata > 85<br>";
echo "grade b, Nilai rata-rata > 85<br>";
echo "grade C, Nilai rata-rata > 60<br>";
echo "grade D, Nilai rata-rata < 60<br>";
?>