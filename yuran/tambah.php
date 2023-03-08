<html>
<head> 
    <title>Rekod Yuran Pelajar</title>
</head>
 <style>
h2 {
text-align: center;
padding-top: 20px; }
body {
background-color: lightcyan; }
</style>
 <body>
  <center> 
    <h2>Borang Rekod Yuran Pelajar </h2> 
    <table border=0 cellpadding=5 cellspacing=1 bgcolor=white
style="padding:20px;border-top:1px solid black; border-left:2px solid black;
border-right:2px solid black; border-bottom:1px solid black; border￾radius:10px">
 <form action="" method="post"> 
    <tr>
        <td>Id Pelajar</td>
        <td>:</td>
        <td> <input type="text" name="id_pelajar"required>
<br><br>
</td>
</tr> 
<tr>
    <td>Nama Pelajar</td>
    <td>:</td>
    <td> <input type="text"name="nama_pelajar" required>
<br> <br>
</td>
</tr> 
<tr>
    <td>Kelas</td>
    <td>:</td>
    <td> <input type="text" name="kelas" required> 
        <br><br>
    </td>
</tr> 
<tr>
    <td>YURAN(RM)</td>
    <td>:</td><td> <input type="text" name="yuran"required>
<br><br>
</td>
</tr> 
<tr>
    <td>Tarikh</td>
    <td>:</td>
    <td> <input type="date" name="tarikh"required>
<br><br>
</td>
</tr>
 <tr>
    <td>Catatan</td>
    <td>:</td>
    <td> <select type="text" name="catatan"required>

<option value="Tunai">Tunai</option>
 <option value="Online Transfer">Online Bank Transfer</option>
 <option value="ATM">ATM</option>
 
 </select>
 <br><br>
</td>
</tr> 
<tr>
    <td colspan=3><center><input type="Submit" name="hantar"value="Hantar">
<br>
</td>
</tr>
</form>
</tr>
</table>
</body>
<?php
include('config.php');
if (isset($_POST['hantar'])){
$id_pelajar=$_POST["id_pelajar"]; 
$nama_pelajar=$_POST["nama_pelajar"];
 $kelas=$_POST["kelas"]; 
 $yuran=$_POST["yuran"];
  $tarikh=$_POST["tarikh"];
   $catatan=$_POST["catatan"];

    $add=mysqli_query($connect, "INSERT INTO pelajar values
('$id_pelajar','$nama_pelajar','$kelas','$yuran','$tarikh','$catatan')");
     header('Location:index.php'); 
 }
?>
</html>