<?php
// array key numerik
$a = array ('tia', 21, true, 14,45);
echo $a[1];

for ($i = 4; $i >= 0; $i--){
    echo $a[$i]. "<br>";
}

// array key asoslatif
$aso = ['nama' => 'tiaagstn', 'umur' => 17, 'alamat' => 'cibaduyutraya'];

foreach ($aso as $index){
    echo $index . "<br>";
}