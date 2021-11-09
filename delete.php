<?php
    $id_identitas = $_GET['id_identitas'];
    

    $query = "delete from identitas where id_identitas = $id_identitas";
    if(mysqli_query($koneski, $query)){
        header("location: index.php");

    }else{
       header("location: index.php?id_identitas=$id_identitas");

    }

?>