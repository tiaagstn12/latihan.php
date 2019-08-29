<html>
<head><title>Pengelolah Form</title></head>
<body>
    <FORM ACTION ="" METHOD="POST" NAME="input">
        Nama    : <input type="text" name="nama"><br>
        Nilai 1 : <input type="text" name="nilai"><br>
        Nilai 2 : <input type="text" name="nilai2"><br>
        <input type="submit" name="Input" value="Simpan">
        <input type="submit" name="Reset" value="Reset">
</FORM>
</body>
</html>

<?php
if (isset($_POST['Input'])){
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];
    $nilai2 = $_POST['nilai2'];
    $rata = ($nilai + $nilai2)/2;
    echo "Nama    :  ".$nama."<br>";
    echo "Nilai 1 :  ".$nilai."<br>";
    echo "Nilai 2 :  ".$nilai2."<br>";
    echo "Rata rata : ".$rata."<br>";
}
?>