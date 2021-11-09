<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php

include ("koneksi.php");

$query = "select * from identitas";
$hasil = mysqli_query($koneksi, $query);
?>

<h1>Table Identitas</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th cosplan= "2">Aksi</th>
    <tr>
    <?php
    while($row = mysqli_fetch_assoc($hasil)) {
        echo "<tr>";
        echo "<td>" . $row["id_identitas"]. "</td>";
        echo "<td>" . $row["nama"]. "</td>";
        echo "<td>" . $row["alamat"]. "</td>";
        echo "<td><a href='edit.php?id_identitas=".$row["id_identitas"]."'>edit</a></td>";
        echo "<td><a href='delete.php?id_identitas=".$row["id_identitas"]."'>delete</a></td>";
        echo "</tr>";
}
?>
<table>
</body>
</html>
