<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <?php
        include ("konesksi.php");
        $id_identitas = $_GET['id_identitas'];

        $query = "select * from identitas where id_identitas = $id_identitas";
        $hasil = mysql_query($koneksi, $query);
        $hasil = mysql_fetch_assoc($hasil);

    ?>

    <h1>EDIT DATA</h1>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id_identitas" value="<?php echo $row['id_identitas']; ?>">
        NAMA : <input type= "text" name="nama" value="<?php echo $row['nama']; ?>" ><br/>
        ALAMAT : <textarea name="alamat"><?php echo $row['alamat']; ?></textarea><br/>
        <input type="submit" value="simpan">
    </form>
</body>
</html>