<?php
if(isset($_POST['sbn'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    foreach ($nama as $data => $val){
        echo "Nama Saya : ".$nama[$data];
        " kelas : ".$kelas[$data]. "<hr>";
        
    }
}