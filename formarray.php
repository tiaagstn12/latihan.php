<html>
<head><title>Form Array</title></head>
<body>
<center>
    <p>Form Array</p>
    </center>
    <fieldset>
    <legend>Form Array</legend>
    <form action="" method="get">
    <label for="">Masukan Jumlah</label>
    <input type="number" name="jml">
    <br>
    <input type="submit" name="submit" value="Simpan">
    <hr>
    </form>
    <?php
    if(isset($_GET['submit'])){
        $jml_form = $_GET['jml'];
        for ($a = 1; $a <= $jml_form; $a++){
            ?>
            <form action="formarraypro.php" method="post">
            <label for="">Nama</label>
            <input type="text" name="nama[]" required>
            <label for="">Kelas</label>
            <input type="text" name="kelas[]" required>
            <br>
            <br>
             
            <?php } ?>
            <input type="submit" name="sbm" value="Simpan">
            <input type="reset" value="Reset">
            </form>
            <?php }
            ?>
            </fieldset>
            </body>
            </html>