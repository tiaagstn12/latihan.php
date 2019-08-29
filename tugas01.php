<?php 
if (isset($_POST['Login'])) {    
    $nama   =   $_POST['username']; 
    $alamat =   $_POST['alamat'];
    $jeniskelamin = $_POST['jk'];  
    $agama   =   $_POST['agama'];  
    $email = $_POST['email'];   
    $pass   =   $_POST['password']; 

    if ($email == "tiaa7970@gmail.com" && $pass == "101118") {
        echo   "<h2>akun aktif</h2>";
    echo "Nama    :  ".$nama."<br>";
    echo "Alamat  :  ".$alamat."<br>";
    echo "Jenis Kelamin : ".$jeniskelamin."<br>";
    echo "Agama   :  ".$agama."<br>";
    echo "Email :  ".$email."<br>";

     
        } else { 
            echo "<h2>akun aktif</h2>";
            echo "Nama    :  ".$nama."<br>";
            echo "Alamat  :  ".$alamat."<br>";
            echo "Jenis Kelamin : ".$jeniskelamin."<br>";
            echo "Agama   :  ".$agama."<br>";
            echo "Email :  ".$email."<br>";
                 
        }
    }                    
?> 