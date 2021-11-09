<?php
    include("koneski.php");
    $id_identitas = $_POST['id_identitas'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $query = "update identitas set nama= '$nama' and alamat = 'alamat' where id_identitas = $id_identitas";
    if(mysqli_query($koneski, $query)){
        echo "berhasil";

    }else{
        echo "gagal";

    }


?>