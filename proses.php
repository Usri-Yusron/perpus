<?php
    if(isset($_POST['aksi'])){              //dibacanya jika ada kegiatan (isset) 
        if($_POST['aksi'] == "add"){
            echo "Tambah Data <a href='kelola.php'>HOME</a>";
        } else if($_POST['aksi'] == "edit"){
            echo "Edit Data <a href='kelola.php'>HOME</a>";
        }
    }

    if(isset($_GET['hapus'])){
        echo "hapus Data <a href='kelola.php'>HOME</a>";
    }
?>