<html>   
 <head><title>Formulir pendaftaran</title></head>    
 <body>        
  <FORM ACTION="tgs02.php" METHOD="POST" NAME="SIMPAN">          
  <h2><b>Formulir Pendaftaran</b></h2>
     NO PENDAFTARAN       <tabel>  <input type="number" name="np"><br></tabel>
     NISN                   <input type="number" name="nis"><br>
     NAMA                   <input type="text" name="nama"><br>
     ALAMAT                 <textarea   name="alamat"   cols="30"   rows="3"></textarea><br>     
     TEMPAT LAHIR           <input type="text" name="tl"></br>
     TANGGAL LAHIR          <input type="date" name="tgl"></br>
     AGAMA                  <select   name="AGAMA">               
                            <option value="ISLAM">ISLAM</option>              
                            <option   value="KRISTEN">KRISTEN</option></select><br>
     ASAL SEKOLAH           <input type="text" name="asl"><br>
     JENIS KELAMIN          <input type="radio" name="jk" value="perempuan" checked>Perempuan         
                            <input type="radio" name="jk" value="Laki laki">Laki laki<br>
     HOBBY                  <select   name="HOBBY">               
                            <option value="BERENANG">BERENANG</option>              
                            <option   value="TIDUR">TIDUR</option>                
                            <option   value="MAKAN">MAKAN</option>
                            <option  value="MAIN HP">MAIN HP</option>
                            <option  value="OLAHRAGA">OLAHRAGA</option></select><br>
     JURUSAN                <select   name="JURUSAN">               
                            <option value="RPL">RPL</option>              
                            <option   value="TKR">TKR</option>                
                            <option   value="TSM">TSM</option></select><br>
      NAMA AYAH             <input type="text" name="na"><br>  
      PEKERJAAN AYAH        <input type="text" name="pa"><br> 
      NAMA IBU              <input type="text" name="ni"><br>
      PEKERJAAN IBU         <input type="text" name="pi"><br>
      <input type="submit" name="SIMPAN" value="SIMPAN">
     <input type="reset" name="KEMBALI" value="KEMBALI">  
     </FORM>
</body>
</html> 



