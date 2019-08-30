<<!DOCTYPE html>
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
    <fieldset>
   <legend>
   TNI
   </legend>
   <form action="" method="get">
   <label for="">Berat Badan</label>
   <input type="number" min="1" name="b" required>
   <br>
   <label for="">Tinggi Badan</label>
   <input type="number" min="1" name="t" required>
   <input type="submit" name="Simpan" value="Simpan">
   </form>
   </fieldset>

   <?php
   if (isset($_GET['Simpan'])){
       $bb = $_GET['b'];
       $tb = $_GET['t'];
       function tni ($berat , $tinggi){
  if ($berat >= 60 && $tinggi >= 165 ){
      $e = "Diterima";
  } else {
      $e = "Tidak Diterima";
  }
  }
   }
?>
</body>
</html>