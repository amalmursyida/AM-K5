<?php
require('config.php');
if(isset($_POST['update']))
{
$id=$_POST['id_pelajar'];
$nama=$_POST['nama_pelajar'];
$kelas=$_POST['kelas'];
$yuran=$_POST['yuran'];
$result=mysqli_query($connect, "UPDATE pelajar SET
nama_pelajar='".$nama."',
kelas='".$kelas."' ,
yuran='".$yuran."'
WHERE id_pelajar='".$id."'");
echo "<script>alert('Kemaskini maklumat pelajar berjaya');
window.location='index.php'</script>";
}
?>
<?php
$id=$_GET['id_pelajar'];
$result=mysqli_query($connect, "SELECT * FROM pelajar WHERE id_pelajar=$id");
while ($res=mysqli_fetch_array($result))
{
$id=$res['id_pelajar'];
$nama=$res['nama_pelajar'];
$kelas=$res['kelas'];
$yuran=$res['yuran'];
$catatan=$res['catatan'];
}
?>
<html>
<head>
<title>KEMASKINI</title>
</head>
<body>
<center><h2>REKOD YURAN</h2>
<fieldset>
<form name="form1" method="post" action="edit.php">
<table border="0">
<tr>
<td>ID Pelajar</td>
<td><input type="text" readonly name="id_pelajar"
value="<?php echo $id;?>"></td>
</tr>
<tr>
<td>Nama Pelajar</td>
<td><input type="text" name="nama_pelajar"
value="<?php echo $nama;?>"></td>
</tr>
<tr>
<td>Kelas</td>
<td><input type="text" name="kelas"
value="<?php echo $kelas;?>"></td>
</tr>
<tr><td>Yuran</td>
<td><input type="text" name="yuran"
value="<?php echo $yuran;?>"></td>
</tr>
<tr><td>Catatan</td>
<td><input type="text" name="catatan"
value="<?php echo $catatan;?>"></td>
</tr>
<tr>
<td><input type="submit" name="update"
value="Update"></td>
</tr>
<tr>
</tr>
</table>
</form>
<a href="index.php">Muka Depan</a>
</fieldset>
</center>
</body>
</html>