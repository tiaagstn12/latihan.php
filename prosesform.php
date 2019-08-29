<?php
if (isset($_POST['Input'])){
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $namabrg     = $_POST['nb'];
    $hrg    = $_POST['hb'];
    $jmlh   = $_POST['jb'];
    $dskrp  = $_POST['des'];
    $tgl    = $_POST['tp'];
    $sub_total  = $jmlh*$hb;
    if($jmlh  >  10){
        $total = $sub_total - (0.2 * $sub_total);
    }elseif ($jmlh > 5){
        $total = $sub_total(0.1 * $sub_total);
    }elseif($jmlh < 5){
        $total = $sub_total;
    }
    if ($jmlh < 0){
        echo "Maaf Barang anda tidak bisa diproses";
    }else{

    echo "Nama : ".$nama."<br>";
    echo "Alamat : ".$alamat."<br>";
    echo "Nama barang : ".$namabrg."<br>";
    echo "Harga barang : ".$hrg."<br>";
    echo "Jumlah barang : ".$jmlh."<br>";
    echo "Deskripsi : ".$dskrp."<br>";
    echo "Total : ".$sub_total."<br>";
    }
}
?>