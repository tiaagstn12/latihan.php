<?php 
if (isset($_POST['SIMPAN'])){
for ($i=0; $i < 5 ; $i++) { 
    for ($j=5; $j > $i; $j--) { 
    echo "&nbsp;"; } 
}   for ($k=0; $k < $i; $k++) { 
    echo "*";
}   for ($l=0; $l <= $i ; $l++) { 
    echo "*"; 
}
    echo "<br>";       
    
}
?>