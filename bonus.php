<?php

$mahasiswa = array
  (
  array("Volvo",22,18"),
  array("BMW",15,13),
  array(135596948,"Bayu","Manajemen Informatika"),
  array(145293833,"Liken","Teknik Komputer")
  );
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Mahasiswa Index Ke-$row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$mahasiswa[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>