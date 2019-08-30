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
    <p>Luas Persegi</p>
    <fieldset>
    <legend>
      Luas Persegi
    </legend>
    <form action="" method="get">
        <label for="">Sisi</label>
        <input type="number" min="1" name="s" required>
        <br>
        <input type="submit" name="Simpan" value="Simpan">
        </form>
        </fieldet>

        <?php
        if (isset($_GET['Simpan'])){
             $sisi = $_GET['s'];

             function luas_persegi($s){
                 $luas = $s * $s;
                 return $luas;
             }
             $luas = luas_persegi($sisi);
             echo "Luas Persegi : $luas";

        }
        ?>
</body>
</html>