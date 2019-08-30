<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <p>Luas Lingkaran</p>
    <fieldset>
    <legend>
    Luas Lingkaran
    </legend>
    <form action="" method="get">
    <label for="">Jari</label>
    <input type="number" min="1" name="r">
    <br>
    <input type="submit" name="Simpan" value="Simpan">
    </form>
    </field>
    </body>
</html>
    <?php
    if (isset($_GET['Simpan'])){
        $er = $_GET['r'];

        function luas_lingkaran($r){
            $luas = 3.14 * $r * $r;
            return $luas;
        }
        function keliling($k){
            $keliling = 2 * $k * 3.14;
            return $keliling;
       
        
    }
    $luas = luas_lingkaran ($er);
        echo "Luas Lingkaran : $luas <br>";

        $keliling = keliling ($er);
                echo "Keliling Lingkaran : $keliling";
}
    ?>