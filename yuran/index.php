<?php
include("config.php");

$papar=mysqli_query
($link, "SELECT*FROM pelajar");
?>

<html>
<head>
  <title>Rekod Yuran</title>
</head>
<body>
  <br>
  <center><h3>REKOD </h3></center>
    <center><table width="60%" border=0>
  

  <tr bgcolor="lightcyan">
    <td>ID PELAJAR</td>
    <td>NAMA PELAJAR</td>
    <td>KELAS</td>
    <td>YURAN(RM)</td>
    <td>TARIKH</td>
    <td>CATATAN</td>
    <td>PADAM</td>
    <td>EDIT</td>
    
  </tr>

<?php
while ($hasil=mysqli_fetch_array($papar)) {
  echo "<br>";
  echo "<tr>";
  echo "<td>".($hasil['id_pelajar'])."</td>";
  echo "<td>".($hasil['nama_pelajar'])."</td>";
  echo "<td>".($hasil['kelas'])."</td>";
  echo "<td>".($hasil['yuran'])."</td>";
  echo "<td>".($hasil['tarikh'])."</td>";
  echo "<td>".($hasil['catatan'])."</td>";
  echo "<td><a href=\"hapus.php?id=$hasil[id_pelajar]\">Padam</a></td>";
  echo "<td><a href=\"edit.php?id=$hasil[id_pelajar]\">Edit</a></td>";
}
?>

</table>
</center>
</body>
</html>