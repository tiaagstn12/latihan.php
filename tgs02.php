<?php
if (isset($_POST['SIMPAN'])){
    $np = $_POST['np'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $almt = $_POST['alamat'];
    $tl = $_POST['tl'];
    $tgl = $_POST['tgl'];
    $agama   =   $_POST['AGAMA'];
    $asl = $_POST['asl'];  
    $jk = $_POST['jk']; 
    $hb = $_POST['HOBBY']; 
    $jrs = $_POST['JURUSAN'];
    $na = $_POST['na'];
    $pa = $_POST['pa'];  
    $ni = $_POST['ni'];
    $pi = $_POST['pi']; 
    echo "NO PENDAFTARAN : " .$np. "<br>";
    echo "NISN           :" .$nis. "<br>";
    echo "NAMA           :" .$nama. "<br>";
    echo "ALAMAT         :".$almt. "<br>";    
    echo "TEMPAT LAHIR   :".$tl."<br>";
    echo "TANGGAL LAHIR  : ".$tgl. "<br>";
    echo "AGAMA          :" .$agama. "<br>";
    echo "ASAL SEKOLAH   : ".$asl."<br>";          
    echo "JENIS KELAMIN  : ".$jk."<br>";
    echo "HOBBY          : ".$hb. "<br>";
    echo "JURUSAN        : ".$jrs."<br>";
    echo "NAMA AYAH      : ".$na."<br>";
    echo "PEKERJAAN AYAN : ".$pa."<br>";
    echo "NAMA IBU       : ".$ni."<br>";
    echo "PEKERJAAN IBU  : ".$pi."<br>";

      
}
?>